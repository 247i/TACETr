#!/usr/bin/env python3

"""
Qt Linguist .ts file translator
-------------------------------

Translates Qt Linguist TS/XML files into Tamil.

Input:
    input.ts

Output:
    input_ta.ts

The program:
    - Preserves the TS/XML structure
    - Translates <source> into Tamil
    - Updates <translation>
    - Preserves Qt placeholders such as %1, %2, %s, etc.
    - Preserves XML entities and formatting as much as possible
    - Skips empty source strings
    - Skips obsolete/vanished translations
"""

import re
import sys
import time
from pathlib import Path
import xml.etree.ElementTree as ET

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
        r"%\d+",             # %1, %2, %10
        r"%[a-zA-Z]",        # %s, %d, %f
        r"\$\{[^}]+\}",      # ${name}
        r"\{[^{}]+\}",       # {name}
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

def get_element_text(element):
    """
    Return all text contained in an XML element, including text inside
    nested elements.
    """

    if element is None:
        return ""

    return "".join(element.itertext())


def contains_tamil(text):
    """
    Return True if the text contains at least one Tamil Unicode character.
    """

    if not text:
        return False

    return bool(re.search(r"[\u0B80-\u0BFF]", text))


def translation_needs_translation(source_element, translation_element):
    """
    Return True only when the existing translation needs translation.

    Translation is required when:
        1. The translation is empty, OR
        2. The translation is the same as the source, OR
        3. The translation contains no Tamil characters.

    A non-empty translation that is different from the source and contains
    Tamil characters is left unchanged.
    """

    source_text = get_element_text(source_element).strip()
    translation_text = get_element_text(translation_element).strip()

    if not translation_text:
        return True

    if translation_text == source_text:
        return True

    if not contains_tamil(translation_text):
        return True

    return False


translator = GoogleTranslator(
    source=SOURCE_LANGUAGE,
    target=TARGET_LANGUAGE
)


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
                translated = restore_placeholders(
                    translated,
                    placeholders
                )

                return translated

        except Exception as exc:

            print(
                f"Translation failed "
                f"(attempt {attempt}/{MAX_RETRIES}): {exc}"
            )

            if attempt < MAX_RETRIES:
                time.sleep(2)

    # If translation fails, keep original text
    return text


# ----------------------------------------------------------------------
# TS file processing
# ----------------------------------------------------------------------

def translate_ts_file(input_file, output_file):
    """
    Translate a Qt Linguist .ts file.
    """

    print(f"Reading:  {input_file}")
    print(f"Writing:  {output_file}")
    print()

    # Parse XML
    tree = ET.parse(input_file)
    root = tree.getroot()

    messages = root.findall(".//message")

    total = len(messages)
    translated_count = 0
    skipped_count = 0

    print(f"Found {total} messages.")
    print()

    for index, message in enumerate(messages, start=1):

        source_element = message.find("source")
        translation_element = message.find("translation")

        if source_element is None:
            skipped_count += 1
            continue

        if translation_element is None:
            translation_element = ET.SubElement(
                message,
                "translation"
            )

        source_text = get_element_text(source_element)

        # --------------------------------------------------------------
        # Skip empty source
        # --------------------------------------------------------------

        if not source_text.strip():
            skipped_count += 1
            continue

        # --------------------------------------------------------------
        # Skip obsolete / vanished messages
        # --------------------------------------------------------------

        translation_type = translation_element.get("type")

        if translation_type in {
            "obsolete",
            "vanished"
        }:
            skipped_count += 1
            continue

        # --------------------------------------------------------------
        # Translate only when necessary
        # --------------------------------------------------------------

        if not translation_needs_translation(
            source_element,
            translation_element
        ):
            print(
                f"[{index}/{total}] SKIP: Already translated - "
                f"{source_text[:60]}"
            )

            skipped_count += 1
            continue

        # --------------------------------------------------------------
        # Translate
        # --------------------------------------------------------------

        print(
            f"[{index}/{total}] Translating:"
        )

        print(f"    EN: {source_text}")

        translated_text = translate_text(source_text)

        print(f"    TA: {translated_text}")
        print()

        translation_element.text = translated_text

        # Mark as finished translation
        if "type" in translation_element.attrib:
            del translation_element.attrib["type"]

        translated_count += 1

        time.sleep(REQUEST_DELAY)

    # ------------------------------------------------------------------
    # Write output
    # ------------------------------------------------------------------

    tree.write(
        output_file,
        encoding="utf-8",
        xml_declaration=True
    )

    print()
    print("=" * 60)
    print("Translation completed.")
    print("=" * 60)
    print(f"Total messages : {total}")
    print(f"Translated     : {translated_count}")
    print(f"Skipped        : {skipped_count}")
    print(f"Output file    : {output_file}")


# ----------------------------------------------------------------------
# Main
# ----------------------------------------------------------------------

def main():

    if len(sys.argv) != 2:
        print(
            "Usage:\n"
            "    python tats.py xyz_ta.ts"
        )
        input_file = Path("gitahead.ts")
    else:
        input_file = Path(sys.argv[1])

    if not input_file.exists():
        print(f"ERROR: File not found: {input_file}")
        sys.exit(1)

    if input_file.suffix.lower() != ".ts":
        print("ERROR: Input file must have a .ts extension.")
        sys.exit(1)

    output_file = input_file.with_name(
        input_file.stem + "_ta.ts"
    )

    translate_ts_file(
        input_file,
        output_file
    )


if __name__ == "__main__":
    main()