#!/usr/bin/env python3

"""
Qt Linguist .col file translator
-------------------------------

Translates colon files into Tamil.

Input:
    input.col

Output:
    input_ta.col

The program:
    - Preserves the colon structure
    - Translates <source> into Tamil
    - Updates <translation>
    - Preserves Qt placeholders such as %1, %2, %s, etc.
    - Preserves col entities and formatting as much as possible
    - Skips empty source strings
    - Skips obsolete/vanished translations
    - Translates all text after the first colon, including additional colons
    - Translates complete lines that do not contain a colon
    - Ignores lines beginning with '='
"""

import re
import sys
import time
from pathlib import Path

from deep_translator import GoogleTranslator


# ----------------------------------------------------------------------
# Configuration
# ----------------------------------------------------------------------

SOURCE_LANGUAGE = "en"
TARGET_LANGUAGE = "ta"

# Number of attempts if translation fails
MAX_RETRIES = 3

# Delay between requests
REQUEST_DELAY = 0.2


# ----------------------------------------------------------------------
# Placeholder handling
# ----------------------------------------------------------------------


def protect_placeholders(text):
    """
    Protect placeholders before sending text to the translator.

    Examples:
        %1
        %2
        %s
        %d
        {name}
        ${name}
    """

    placeholders = []

    patterns = [
        r"%\d+",  # %1, %2, %10
        r"%[a-zA-Z]",  # %s, %d, %f
        r"\$\{[^}]+\}",  # ${name}
        r"\{[^{}]+\}",  # {name}
    ]

    combined_pattern = "|".join(f"({p})" for p in patterns)

    def replace(match):
        token = f"__QT_PLACEHOLDER_{len(placeholders)}__"
        placeholders.append(match.group(0))
        return token

    protected = re.sub(combined_pattern, replace, text)

    return protected, placeholders


def restore_placeholders(text, placeholders):
    """
    Restore placeholders after translation.
    """

    for index, placeholder in enumerate(placeholders):
        token = f"__QT_PLACEHOLDER_{index}__"
        text = text.replace(token, placeholder)

    return text


# ----------------------------------------------------------------------
# Translation
# ----------------------------------------------------------------------


def contains_tamil(text):
    """
    Return True if the text contains at least one Tamil Unicode character.
    """

    if not text:
        return False

    return bool(re.search(r"[\u0B80-\u0BFF]", text))


def source_needs_translation(source_text):
    """
    Return True only when the existing translation needs translation.

    Translation is required when:
        1. The translation contains no Tamil characters.
    """
    if not contains_tamil(source_text):
        return True

    return False


translator = GoogleTranslator(source=SOURCE_LANGUAGE, target=TARGET_LANGUAGE)


def translate_line(line):
    """
    Translate text after `:`
    """

    # Preserve line endings exactly.
    line_ending = ""
    content = line
    print(line)
    if line.endswith("\r\n"):
        content = line[:-2]
        line_ending = "\r\n"
    elif line.endswith("\n") or line.endswith("\r"):
        content = line[:-1]
        line_ending = line[-1]

    # Ignore lines that start with '='.
    if content.startswith("="):
        return line

    # Split only at the FIRST colon.
    if ":" in content:
        prefix, text_to_translate = content.split(":", 1)

        # Keep the colon and everything before it unchanged.
        translated = translate_text(text_to_translate)

        return prefix + ":" + translated + line_ending

    # No colon: translate the complete line.
    return_value = translate_text(content) + line_ending
    print(return_value)
    return return_value


def translate_multiline_text(text):
    """
    Translate text line by line.

    Each line is handled independently so that ':' processing applies
    separately to every line.
    """

    if not text:
        return text

    return "".join(translate_line(line) for line in text.splitlines(keepends=True))


def translate_text(text):
    """
    Translate one piece of text into Tamil.
    """

    if not text or not text.strip():
        return text

    protected_text, placeholders = protect_placeholders(text)

    for attempt in range(1, MAX_RETRIES + 1):

        try:
            translated = translator.translate(protected_text)

            if translated:
                translated = restore_placeholders(translated, placeholders)

                time.sleep(REQUEST_DELAY)
                return translated

        except Exception as exc:

            print(f"Translation failed " f"(attempt {attempt}/{MAX_RETRIES}): {exc}")

            if attempt < MAX_RETRIES:
                time.sleep(2)

    # If translation fails, keep original text
    return text


# ----------------------------------------------------------------------
# .col file handling
# ----------------------------------------------------------------------


def translate_col_file(input_file, output_file):
    """
    Read the .col file and translate it line by line.
    The original file is never modified. A new *_ta.col file is created.
    """

    try:
        text = input_file.read_text(encoding="utf-8")
    except UnicodeDecodeError:
        print("ERROR: Input file is not valid UTF-8.")
        sys.exit(1)
    except OSError as exc:
        print(f"ERROR: Could not read input file: {exc}")
        sys.exit(1)

    translated_text = translate_multiline_text(text)

    try:
        output_file.write_text(translated_text, encoding="utf-8", newline="")
    except OSError as exc:
        print(f"ERROR: Could not write output file: {exc}")
        sys.exit(1)

    print(f"Input : {input_file}")
    print(f"Output: {output_file}")


def main():

    if len(sys.argv) != 2:
        print("Usage:\n" "    python tats.py peazip.col")
        input_file = Path("/home/ta/g/TACETr/உரை/வெறுமை/peazip.col")
    else:
        input_file = Path(sys.argv[1])

    if not input_file.exists():
        print(f"ERROR: File not found: {input_file}")
        sys.exit(1)

    if input_file.suffix.lower() != ".col":
        print("ERROR: Input file must have a .col extension.")
        sys.exit(1)

    output_file = input_file.with_name(input_file.stem + "_ta.col")

    translate_col_file(input_file, output_file)


if __name__ == "__main__":
    main()
