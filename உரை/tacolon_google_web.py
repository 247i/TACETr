#!/usr/bin/env python3

"""
PeaZip .col file translator
---------------------------

Translates PeaZip .col language files into Tamil.

The PeaZip .col format used by this script contains several sections:

    === PeaZip language file ===
    === PeaZip text group ===
    === end PeaZip text group ===
    === PeaLauncher text group ===
    === end PeaLauncher text group ===
    === about text group ===

Rules:
    - Preserve the file structure and section headers.
    - Preserve the language-file metadata.
    - In the text groups, translate only the value after the FIRST colon.
    - In the about section, translate complete non-empty text lines.
    - Preserve URLs, Qt placeholders, keyboard shortcuts and formatting tokens.
    - Skip empty lines.
    - Skip lines already containing Tamil.
    - Never send section headers or metadata such as "English" to the translator.
    - Retry failed translations.
    - If translation ultimately fails, keep the original text.
"""

import re
import sys
import time
from pathlib import Path

import requests


# ----------------------------------------------------------------------
# Configuration
# ----------------------------------------------------------------------

SOURCE_LANGUAGE = "en"
TARGET_LANGUAGE = "ta"

MAX_RETRIES = 3
REQUEST_DELAY = 0.2
RETRY_DELAY = 2.0


GOOGLE_TRANSLATE_URL = "https://translate.google.com/m"
HTTP_HEADERS = {
    "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 Chrome/140.0 Safari/537.36",
    "Accept-Language": "en-US,en;q=0.9",
}
HTTP_TIMEOUT = 30
session = requests.Session()
session.headers.update(HTTP_HEADERS)


# ----------------------------------------------------------------------
# Character / placeholder helpers
# ----------------------------------------------------------------------

def contains_tamil(text):
    """Return True if text contains at least one Tamil Unicode character."""
    return bool(text and re.search(r"[\u0B80-\u0BFF]", text))


def protect_tokens(text):
    """
    Protect tokens which must survive translation unchanged.

    Protected examples:
        %1, %2, %10
        %s, %d, %f
        ${name}
        {name}
        URLs
        keyboard/control tokens such as Ctrl+F2
    """
    tokens = []

    patterns = [
        r"https?://[^\s]+",
        r"\$\{[^}]+\}",
        r"\{[^{}]+\}",
        r"%\d+",
        r"%[a-zA-Z]",
        r"\bCtrl(?:\+Shift|\+Alt)?(?:\+[A-Z0-9]+)+\b",
        r"\bShift\+[A-Z0-9]+\b",
        r"\bAlt\+[A-Z0-9]+\b",
        r"\bF(?:[1-9]|1[0-2])\b",
    ]

    combined = "|".join(f"({pattern})" for pattern in patterns)

    def replace(match):
        token = f"__PEAZIP_TOKEN_{len(tokens)}__"
        tokens.append(match.group(0))
        return token

    protected = re.sub(combined, replace, text)
    return protected, tokens


def restore_tokens(text, tokens):
    """Restore protected tokens after translation."""
    for index, token_value in enumerate(tokens):
        token = f"__PEAZIP_TOKEN_{index}__"
        text = text.replace(token, token_value)

    return text


# ----------------------------------------------------------------------
# Translation
# ----------------------------------------------------------------------

def translate_text(text, line_number=None):
    """
    Translate one text value.

    Empty strings and already-Tamil strings are returned unchanged.
    """
    if not text or not text.strip():
        return text

    if contains_tamil(text):
        return text

    protected_text, tokens = protect_tokens(text)

    for attempt in range(1, MAX_RETRIES + 1):
        try:
            response = session.get(
                GOOGLE_TRANSLATE_URL,
                params={"sl": SOURCE_LANGUAGE, "tl": TARGET_LANGUAGE, "q": protected_text},
                timeout=HTTP_TIMEOUT,
            )
            response.raise_for_status()

            from html import unescape

            match = re.search(
                r'class="(?:result-container|t0)"[^>]*>(.*?)</',
                response.text,
                flags=re.DOTALL,
            )
            if not match:
                match = re.search(
                    r'<textarea[^>]*>(.*?)</textarea>',
                    response.text,
                    flags=re.DOTALL,
                )
            if not match:
                raise RuntimeError("Google Translate returned no translation result")

            translated = unescape(match.group(1))
            translated = re.sub(r"<[^>]+>", "", translated).strip()

            if translated:
                translated = restore_tokens(translated, tokens)
                time.sleep(REQUEST_DELAY)
                return translated

            raise RuntimeError("Google Translate returned an empty result")

        except Exception as exc:
            location = f"line {line_number}" if line_number else "text"
            print(
                f"Translation failed ({location}, "
                f"attempt {attempt}/{MAX_RETRIES}): {exc}"
            )

            if attempt < MAX_RETRIES:
                time.sleep(RETRY_DELAY)

    print(
        f"Keeping original text after {MAX_RETRIES} failed attempts"
        + (f" (line {line_number})" if line_number else "")
    )

    return text


# ----------------------------------------------------------------------
# .col parsing
# ----------------------------------------------------------------------

SECTION_TEXT = "text"
SECTION_LAUNCHER = "launcher"
SECTION_ABOUT = "about"
SECTION_HEADER = "header"


def section_from_header(line):
    """Return the logical section represented by a .col section header."""
    header = line.strip().lstrip("\ufeff")

    if header == "=== PeaZip text group ===":
        return SECTION_TEXT

    if header == "=== end PeaZip text group ===":
        return SECTION_HEADER

    if header == "=== PeaLauncher text group ===":
        return SECTION_LAUNCHER

    if header == "=== end PeaLauncher text group ===":
        return SECTION_HEADER

    if header == "=== about text group ===":
        return SECTION_ABOUT

    if header.startswith("==="):
        return SECTION_HEADER

    return None


def translate_text_group_line(line, line_number):
    """
    Translate a line from a normal PeaZip text group.

    Format:
        key: English text

    Only the value after the FIRST colon is translated.
    """
    line_ending = ""
    content = line

    if content.endswith("\r\n"):
        content = content[:-2]
        line_ending = "\r\n"
    elif content.endswith("\n") or content.endswith("\r"):
        content = content[:-1]
        line_ending = line[-1]

    if not content.strip():
        return line

    # A text-group entry must have a key and a colon.
    if ":" not in content:
        return line

    prefix, value = content.split(":", 1)

    # Empty value: nothing to translate.
    if not value.strip():
        return line

    translated = translate_text(value, line_number)

    return prefix + ":" + translated + line_ending


def translate_about_line(line, line_number):
    """
    Translate a complete line from the PeaZip about/help section.

    The about section intentionally contains prose without key:value pairs.
    """
    line_ending = ""
    content = line

    if content.endswith("\r\n"):
        content = content[:-2]
        line_ending = "\r\n"
    elif content.endswith("\n") or content.endswith("\r"):
        content = content[:-1]
        line_ending = line[-1]

    if not content.strip():
        return line

    # Keep URLs-only lines unchanged.
    if re.fullmatch(r"\s*https?://\S+\s*", content):
        return line

    # Keep a line containing only a keyboard shortcut unchanged.
    if re.fullmatch(
        r"\s*(?:F(?:[1-9]|1[0-2])|Ctrl|Shift|Alt)[^a-zA-Z\u0B80-\u0BFF]*\s*",
        content,
    ):
        return line

    translated = translate_text(content, line_number)
    return translated + line_ending


def translate_col_file(input_file, output_file):
    """Read, translate and write a PeaZip .col file."""
    try:
        lines = input_file.read_text(encoding="utf-8-sig").splitlines(
            keepends=True
        )
    except UnicodeDecodeError:
        print("ERROR: Input file is not valid UTF-8.")
        sys.exit(1)
    except OSError as exc:
        print(f"ERROR: Could not read input file: {exc}")
        sys.exit(1)

    section = SECTION_HEADER
    output_lines = []

    translated_count = 0
    skipped_count = 0
    failed_count = 0

    for line_number, line in enumerate(lines, start=1):
        header_section = section_from_header(line)

        if header_section is not None:
            # Section headers are structural and must NEVER be translated.
            output_lines.append(line)
            section = header_section
            continue

        # Preserve blank lines everywhere.
        if not line.strip():
            output_lines.append(line)
            continue

        # --------------------------------------------------------------
        # Header / metadata
        # --------------------------------------------------------------
        if section == SECTION_HEADER:
            # Lines such as:
            #   English
            #   11.2
            #   Translated by: Giorgio Tani
            #   Last rev.: 20260114
            #
            # are metadata, not translatable UI strings.
            output_lines.append(line)
            skipped_count += 1
            continue

        # --------------------------------------------------------------
        # Normal text groups
        # --------------------------------------------------------------
        if section in (SECTION_TEXT, SECTION_LAUNCHER):
            if ":" not in line:
                # Do not guess. Unexpected non-key lines are preserved.
                output_lines.append(line)
                skipped_count += 1
                continue

            before = line
            translated = translate_text_group_line(line, line_number)
            output_lines.append(translated)

            if translated != before:
                translated_count += 1
            else:
                skipped_count += 1

            continue

        # --------------------------------------------------------------
        # About / help section
        # --------------------------------------------------------------
        if section == SECTION_ABOUT:
            before = line
            translated = translate_about_line(line, line_number)
            output_lines.append(translated)

            if translated != before:
                translated_count += 1
            else:
                skipped_count += 1

            continue

        # Unknown state: preserve rather than risk corrupting the file.
        output_lines.append(line)
        skipped_count += 1

    translated_text = "".join(output_lines)

    try:
        output_file.write_text(
            translated_text,
            encoding="utf-8",
            newline="",
        )
    except OSError as exc:
        print(f"ERROR: Could not write output file: {exc}")
        sys.exit(1)

    print()
    print("Translation complete")
    print(f"Input       : {input_file}")
    print(f"Output      : {output_file}")
    print(f"Translated  : {translated_count}")
    print(f"Preserved   : {skipped_count}")
    print(f"Total lines : {len(lines)}")


# ----------------------------------------------------------------------
# Main
# ----------------------------------------------------------------------

def main():
    if len(sys.argv) != 2:
        print("Usage:")
        print("    python tacolon.py peazip.col")
        sys.exit(1)

    input_file = Path(sys.argv[1])

    if not input_file.exists():
        print(f"ERROR: File not found: {input_file}")
        sys.exit(1)

    if input_file.suffix.lower() != ".col":
        print("ERROR: Input file must have a .col extension.")
        sys.exit(1)

    output_file = input_file.with_name(
        input_file.stem + "_ta.col"
    )

    translate_col_file(input_file, output_file)


if __name__ == "__main__":
    main()
