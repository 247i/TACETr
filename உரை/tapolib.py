"""
எடுபொருள் கோப்புகள்

மொழிபெயர்ப்பு பணிப்பாய்வு:

PO entry
   ↓
normalize source
   ↓
translation memory lookup
   ↓
protect placeholders
   ↓
online translation
   ↓
restore placeholders
   ↓
terminology replacement
   ↓
validate placeholders
   ↓
validate formatting
   ↓
mark fuzzy/confirmed
   ↓
save
"""

import os
import re
import glob
import json
import datetime
from collections import Counter
from typing import Optional, Tuple, List

import polib
import translators as ts
from time import sleep


# ---------------------------------------------------------------------------
# உலகளாவிய நினைவகங்கள்
# ---------------------------------------------------------------------------

ஃ = None
ஔ = None
நினைவில் = ""


# ---------------------------------------------------------------------------
# PO / MO கோப்பு உதவிகள்
# ---------------------------------------------------------------------------

def எபொநேரம்():
    """எடுபொருள் நேரமுத்திரையை உருவாக்கி வழங்கு"""
    இப்பொழுது = datetime.datetime.now()
    return இப்பொழுது.strftime("%Y-%m-%d %H:%M")


def அகராதி_திற(அகராதி):
    """அகராதி திற அல்லது உருவாக்கு"""
    பாதை = os.path.abspath(அகராதி)

    if os.path.exists(பாதை):
        பொருள்கள் = polib.pofile(பாதை)
    else:
        பொருள்கள் = polib.POFile()
        பொருள்கள்.metadata = {
            "Project-Id-Version": "தமிழ்_அகராதி_1.0",
            "Report-Msgid-Bugs-To": "anishprabu.t@gmail.com",
            "POT-Creation-Date": "2054-01-01 59:59+0530",
            "PO-Revision-Date": "2055-01-01 59:59+0530",
            "Last-Translator": "தமிழ்நேரம் <https://TamilNeram.github.io>",
            "Language-Team": "தமிழ்நேரம் <https://TamilNeram.github.io>",
            "Language": "ta",
            "MIME-Version": "1.0",
            "Content-Type": "text/plain; charset=utf-8",
            "Content-Transfer-Encoding": "8bit",
            "Plural-Forms": "nplurals=2; plural=n != 1;",
            # Translators:
            # தமிழ்நேரம்<https://TamilNeram.github.io>,2023
        }
        பொருள்கள்.metadata["PO-Revision-Date"] = எபொநேரம்()
        பொருள்கள்.save(பாதை)

        # கோப்பை மீண்டும் படி; இதனால் polib object-க்கு சரியான பாதை இருக்கும்.
        பொருள்கள் = polib.pofile(பாதை)

    பொருள்கள்.பாதை = பாதை
    return பொருள்கள்


def அகராதி_சேமி(பொருள்கள், இருமம்=False):
    """
    பொருளை தட்டில் சேமி.
    எபொ - எடுத்துசெல்லதக்கபொருள் கோப்பு.
    கபொ - இருமபொருள் கோப்பு.
    """
    பொருள்கள்.metadata["PO-Revision-Date"] = எபொநேரம்()
    பொருள்கள்.save(பொருள்கள்.பாதை)

    if இருமம்:
        பொருள்கள்.save_as_mofile(பொருள்கள்.பாதை[:-2] + "mo")


def அகராதி_இருமபொருள்(பாதை):
    """
    எடுபொருள் => இருமம்
    எபொ கோப்பை கபொ கோப்பாக சேமி
    """
    எடுபொருள்கள் = polib.pofile(பாதை)
    எடுபொருள்கள்.save_as_mofile(பாதை[:-2] + "mo")


def அகராதி_எடுபொருள்(பாதை):
    """
    இருமம் => எடுபொருள்
    கபொ கோப்பை எபொ கோப்பாக சேமி
    """
    இருமபொருள்கள் = polib.mofile(பாதை)
    இருமபொருள்கள்.save_as_pofile(பாதை[:-2] + "po")


def வரிசைபடுத்து_கோப்புகள்(பாதை):
    """கோப்புகளில் உள்ள பொருள்களை வரிசைபடுத்தும்"""
    for கோப்பு in glob.glob(பாதை):
        அ = அகராதி_திற(கோப்பு)
        அ.sort()
        அகராதி_சேமி(அ)


# ---------------------------------------------------------------------------
# Source normalization
# ---------------------------------------------------------------------------

def மூலம்_சீரமை(மூலம்: str) -> str:
    """
    மொழிபெயர்ப்புக்கு முன் source text-ஐ ஒரே மாதிரியாக்கு.

    PO msgid-இல் உள்ள leading/trailing whitespace மற்றும் புதிய வரிகளை
    பாதுகாக்க வேண்டும். எனவே உள்ளடக்கத்தை முழுமையாக strip செய்யாமல்,
    Unicode-இன் சாதாரண non-breaking space-ஐ சாதாரண space ஆக மட்டும் மாற்றுகிறோம்.
    """
    if மூலம் is None:
        return ""

    மூலம் = str(மூலம்)
    மூலம் = மூலம்.replace("\u00a0", " ")
    மூலம் = மூலம்.replace("\r\n", "\n")
    மூலம் = மூலம்.replace("\r", "\n")
    return மூலம்


# ---------------------------------------------------------------------------
# Translation memory
# ---------------------------------------------------------------------------

def கோப்புமொழி(ஆங்கிலம், பாதை):
    """
    கோப்பிலிருந்து ஆங்கிலம் தமிழ் மொழிபெயர்ப்பு பெறு

    Returns:
        தமிழ்: ஆங்கில உரையின் தமிழாக்கம்
        குழப்பமானது: தெளிவான அல்லது குழப்பமான மொழிபெயர்ப்பு கொடி
    """
    தமிழ் = None
    குழப்பமானது = True

    global ஔ
    global நினைவில்

    பாதை = os.path.abspath(பாதை)

    if not os.path.exists(பாதை):
        return None, True

    if நினைவில் != பாதை:
        நினைவில் = பாதை
        ஔ = அகராதி_திற(பாதை)

    ஆ = ஔ.find(ஆங்கிலம்.lower())

    if ஆ is not None and ஆ.msgstr:
        தமிழ் = ஆ.msgstr
        குழப்பமானது = "fuzzy" in ஆ.flags

    return தமிழ், குழப்பமானது


def நினைவக_தேடு(மூலம்):
    """
    முதன்மை translation memory மற்றும் fallback memory-யில் தேடு.
    """
    தமிழ், குழப்பமானது = கோப்புமொழி(
        மூலம்,
        "./நினைவு/அகராதி.po",
    )

    if தமிழ்:
        return தமிழ், குழப்பமானது, "memory"

    தமிழ், குழப்பமானது = கோப்புமொழி(
        மூலம்,
        "./நினைவு/பின்மொழி.po",
    )

    if தமிழ்:
        return தமிழ், குழப்பமானது, "fallback-memory"

    return None, True, None


# ---------------------------------------------------------------------------
# Placeholder protection
# ---------------------------------------------------------------------------

# ஆதரிக்கப்படும் பொதுவான placeholder வடிவங்கள்:
#   %s, %d, %u, %g, %r, %i, %f, %ld, %lld
#   %1$s, %2$d
#   %(name)s, %(count)d
#   {name}, {name:value}
#   {{name}}
#   ${name}
PLACEHOLDER_PATTERN = re.compile(
    r"""
    %(?:\d+\$)?[+#0\- ]*(?:\d+|\*)?(?:\.\d+|\.\*)?(?:hh|h|ll|l|L|z|j|t)?[diuoxXfFeEgGaAcCspr]
    |
    %\([A-Za-z_][A-Za-z0-9_]*\)[diuoxXfFeEgGaAcCspr]
    |
    \$\{[^{}\r\n]+\}
    |
    \{\{[^{}\r\n]+\}\}
    |
    \{[A-Za-z_][A-Za-z0-9_.: -]*\}
    """,
    re.VERBOSE,
)


def இடம்காட்டிகள்_பெறு(உரை: str) -> List[str]:
    """Source text-இல் உள்ள placeholders-ஐ வரிசையாக பெறு."""
    return PLACEHOLDER_PATTERN.findall(உரை)


def இடம்காட்டி_பாதுகாப்பு(மூலம்: str) -> Tuple[str, List[str]]:
    """
    Online translator placeholder-களை மாற்றாமல் இருக்க unique token-களாக மாற்று.
    """
    இடம்காட்டிகள் = இடம்காட்டிகள்_பெறு(மூலம்)
    பாதுகாப்பான = மூலம்

    for எண், இடம்காட்டி in enumerate(இடம்காட்டிகள்):
        token = f"__TAPO_PLACEHOLDER_{எண்}__"
        பாதுகாப்பான = பாதுகாப்பான.replace(இடம்காட்டி, token, 1)

    return பாதுகாப்பான, இடம்காட்டிகள்


def இடம்காட்டி_மீட்டெடு(
    தமிழ்: str,
    இடம்காட்டிகள்: List[str],
) -> Tuple[str, bool]:
    """
    Protected tokens-ஐ original placeholders-ஆக மீட்டெடு.
    """
    for எண், இடம்காட்டி in enumerate(இடம்காட்டிகள்):
        token = f"__TAPO_PLACEHOLDER_{எண்}__"

        if token not in தமிழ்:
            return தமிழ், False

        தமிழ் = தமிழ்.replace(token, இடம்காட்டி, 1)

    return தமிழ், True


def இடம்காட்டி_சரிபார்(மூலம்: str, தமிழ்: str) -> bool:
    """
    Source மற்றும் translation இரண்டிலும் placeholders ஒரே எண்ணிக்கையில்
    மற்றும் ஒரே வகையில் உள்ளனவா என்று சரிபார்.
    """
    மூலம்_இடம்காட்டிகள் = இடம்காட்டிகள்_பெறு(மூலம்)
    தமிழ்_இடம்காட்டிகள் = இடம்காட்டிகள்_பெறு(தமிழ்)

    return (
        Counter(மூலம்_இடம்காட்டிகள்)
        == Counter(தமிழ்_இடம்காட்டிகள்)
    )


# ---------------------------------------------------------------------------
# Online translation
# ---------------------------------------------------------------------------

def இணையமொழி(ஆங்கிலம், சேவையகம்=0):
    """
    இணையத்திலிருந்து ஆங்கிலம் தமிழ் மொழிபெயர்ப்பு பெறு.

    Returns:
        கலவை: மொழிபெயர்ப்பு
        குழப்பமானது: மொழிபெயர்ப்பு நம்பகமானதா என்ற கொடி
        வெற்றி: online translation வெற்றி பெற்றதா
    """
    சேவையகங்கள் = ["google", "bing", "Yandex"]
    வ = சேவையகங்கள்[சேவையகம் % len(சேவையகங்கள்)]

    கலவை = ஆங்கிலம்

    try:
        கலவை = ts.translate_text(
            ஆங்கிலம்,
            translator=வ,
            from_language="auto",
            to_language="ta",
        )

        if not கலவை or கலவை == ".":
            return ஆங்கிலம், True, False

        return கலவை, False, True

    except Exception as e:
        print("மொழிபெயர்ப்பு பிழை:", வ, ஆங்கிலம், e)
        return ஆங்கிலம், True, False


# ---------------------------------------------------------------------------
# Terminology replacement
# ---------------------------------------------------------------------------

def பிறமொழி_தவிர்(கலவை):
    """
    Translation memory-யில் உள்ள terminology-ஐ translation-ல் பயன்படுத்தும்.
    """
    global ஃ

    if not os.path.exists("./நினைவு/பின்மொழி.po"):
        return கலவை, False

    if ஃ is None:
        ஃ = அகராதி_திற("./நினைவு/பின்மொழி.po")

    எழுத்து_பாதை = "./நினைவு/பின்எழுத்து.po"
    எழுத்து = None

    if os.path.exists(எழுத்து_பாதை):
        எழுத்து = அகராதி_திற(எழுத்து_பாதை)

    குழப்பமானது = False

    # முதலில் முழு சொற்றொடர் terminology replacement.
    if எழுத்து:
        for எ in எழுத்து.translated_entries():
            if எ.msgid and எ.msgstr and எ.msgid in கலவை:
                கலவை = கலவை.replace(எ.msgid, எ.msgstr)
                குழப்பமானது = True

    # பின்னர் word-level fallback terminology.
    சொற்கள் = கலவை.split(" ")
    புதிய_சொற்கள் = []

    for பிற_சொல் in சொற்கள்:
        if not பிற_சொல்:
            புதிய_சொற்கள்.append(பிற_சொல்)
            continue

        முதல் = ""
        முடிவு = ""

        இடது = ['"', "'", ":"]
        வலது = [",", '"', "'", "\n", "."]

        மாறியது = True
        while மாறியது and பிற_சொல்:
            மாறியது = False

            for குறி in இடது:
                if பிற_சொல்.startswith(குறி):
                    முதல் += குறி
                    பிற_சொல் = பிற_சொல்[len(குறி):]
                    மாறியது = True
                    break

        மாறியது = True
        while மாறியது and பிற_சொல்:
            மாறியது = False

            for குறி in வலது:
                if பிற_சொல்.endswith(குறி):
                    முடிவு = குறி + முடிவு
                    பிற_சொல் = பிற_சொல்[:-len(குறி)]
                    மாறியது = True
                    break

        சொல் = பிற_சொல்

        if சொல்:
            ஆ = ஃ.find(சொல்.lower())

            if ஆ is not None and ஆ.msgstr:
                சொல் = ஆ.msgstr
                குழப்பமானது = True

        புதிய_சொற்கள்.append(முதல் + சொல் + முடிவு)

    return " ".join(புதிய_சொற்கள்), குழப்பமானது


# ---------------------------------------------------------------------------
# Formatting validation
# ---------------------------------------------------------------------------

def சரிபார்(மூலம், தமிழ்):
    """பதிவு சரிபார்"""
    if தமிழ் is None:
        return மூலம், True

    முன் = தமிழ்

    # Original code-இல் இருந்த known translator corrections.
    if மூலம்.find("%s") >= 0:
        தமிழ் = தமிழ்.replace("%கள்", "%s")
        தமிழ் = தமிழ்.replace("% கள்", "%s")
        தமிழ் = தமிழ்.replace("%எச்", "%s")
        தமிழ் = தமிழ்.replace("% எச்", "%s")
        தமிழ் = தமிழ்.replace("%S", "%s")

    if மூலம்.find("%1$s") >= 0:
        தமிழ் = தமிழ்.replace("%1 $ எச்", "%1$s")
        தமிழ் = தமிழ்.replace("%1 $ கள்", "%1$s")
        தமிழ் = தமிழ்.replace("%1 $ s", "%1$s")
        தமிழ் = தமிழ்.replace("%1 $ S", "%1$s")

    if மூலம்.find("%2$s") >= 0:
        தமிழ் = தமிழ்.replace("%2 $ எச்", "%2$s")
        தமிழ் = தமிழ்.replace("%2 $ கள்", "%2$s")
        தமிழ் = தமிழ்.replace("%2 $ s", "%2$s")
        தமிழ் = தமிழ்.replace("%2 $ S", "%2$s")

    if மூலம்.find("%3$s") >= 0:
        தமிழ் = தமிழ்.replace("%3 $ எச்", "%3$s")
        தமிழ் = தமிழ்.replace("%3 $ கள்", "%3$s")
        தமிழ் = தமிழ்.replace("%3 $ s", "%3$s")
        தமிழ் = தமிழ்.replace("%3 $ S", "%3$s")

    if மூலம்.find("%1s") >= 0:
        தமிழ் = தமிழ்.replace("%1 எச்", "%1s")
        தமிழ் = தமிழ்.replace("%1 கள்", "%1s")
        தமிழ் = தமிழ்.replace("%1 s", "%1s")
        தமிழ் = தமிழ்.replace("%1 S", "%1s")

    if மூலம்.find("%1$d") >= 0:
        தமிழ் = தமிழ்.replace("%1 $ டி", "%1$d")
        தமிழ் = தமிழ்.replace("%1 $ d", "%1$d")

    if மூலம்.find("%2$d") >= 0:
        தமிழ் = தமிழ்.replace("%2 $ டி", "%2$d")
        தமிழ் = தமிழ்.replace("%2 $ d", "%2$d")

    if மூலம்.find("%3$d") >= 0:
        தமிழ் = தமிழ்.replace("%3 $ டி", "%3$d")
        தமிழ் = தமிழ்.replace("%3 $ d", "%3$d")

    if மூலம்.find("%1d") >= 0:
        தமிழ் = தமிழ்.replace("%1 டி", "%1d")
        தமிழ் = தமிழ்.replace("%1 d", "%1d")

    if மூலம்.find("%lu") >= 0:
        தமிழ் = தமிழ்.replace("% LU", "%lu")
        தமிழ் = தமிழ்.replace("%LU", "%lu")

    if மூலம்.find("%r") >= 0:
        தமிழ் = தமிழ்.replace("%ஆர்", "%r")
        தமிழ் = தமிழ்.replace("% ஆர்", "%r")
        தமிழ் = தமிழ்.replace("%R", "%r")

    if மூலம்.find("%u") >= 0:
        தமிழ் = தமிழ்.replace("%யு", "%u")
        தமிழ் = தமிழ்.replace("% யு", "%u")
        தமிழ் = தமிழ்.replace("%U", "%u")

    if மூலம்.find("%g") >= 0:
        தமிழ் = தமிழ்.replace("%கிராம்", "%g")
        தமிழ் = தமிழ்.replace("% கிராம்", "%g")
        தமிழ் = தமிழ்.replace("%G", "%g")

    if மூலம்.find("%d") >= 0:
        தமிழ் = தமிழ்.replace("%டி", "%d")
        தமிழ் = தமிழ்.replace("% டி", "%d")
        தமிழ் = தமிழ்.replace("%D", "%d")

    if மூலம்.find("&amp;") >= 0:
        தமிழ் = தமிழ்.replace("& ஆம்ப்;", "&amp;")

    if மூலம்.find("%i") >= 0:
        தமிழ் = தமிழ்.replace("%I", "%i")

    if மூலம்.find("%lld") >= 0:
        தமிழ் = தமிழ்.replace("%எல்.எல்.டி.", "%lld")
        தமிழ் = தமிழ்.replace("%LLD", "%lld")
        தமிழ் = தமிழ்.replace("% எல்.எல்.டி.", "%lld")

    # இயல்பான மாற்றம்
    தமிழ் = தமிழ்.replace("மீண்டும் மீண்டும்", "மறுநிகழ்வு")

    # Source-ன் leading/trailing newline formatting-ஐ பாதுகாக்கவும்.
    if மூலம்.startswith("\n") and not தமிழ்.startswith("\n"):
        தமிழ் = "\n" + தமிழ்

    if மூலம்.endswith("\n") and not தமிழ்.endswith("\n"):
        தமிழ் += "\n"

    மாற்றம் = தமிழ் != முன்
    return தமிழ், மாற்றம்


def வடிவமைப்பு_சரிபார்(மூலம்: str, தமிழ்: str) -> bool:
    """
    Translation formatting-ஐ source-உடன் ஒப்பிடு.
    """
    if மூலம்.startswith("\n") != தமிழ்.startswith("\n"):
        return False

    if மூலம்.endswith("\n") != தமிழ்.endswith("\n"):
        return False

    # Escaped newline எண்ணிக்கை மாறக்கூடாது.
    if மூலம்.count("\\n") != தமிழ்.count("\\n"):
        return False

    # Tab எண்ணிக்கை மாறக்கூடாது.
    if மூலம்.count("\t") != தமிழ்.count("\t"):
        return False

    return True


# ---------------------------------------------------------------------------
# Main workflow
# ---------------------------------------------------------------------------

def பொருள்_பெறு(ஆங்கிலம், சேவையகம்=0):
    """
    ஒரு source string-க்கு முழு translation workflow:

    PO entry
       ↓
    normalize source
       ↓
    translation memory lookup
       ↓
    protect placeholders
       ↓
    online translation
       ↓
    restore placeholders
       ↓
    terminology replacement
       ↓
    validate placeholders
       ↓
    validate formatting
       ↓
    mark fuzzy/confirmed
    """

    மூலம் = மூலம்_சீரமை(ஆங்கிலம்)

    if not மூலம்:
        return "", True, "empty"

    # 1. Translation memory lookup
    தமிழ், குழப்பமானது, மூலம்_வகை = நினைவக_தேடு(மூலம்)

    if தமிழ்:
        # Memory result-ஐ கூட validation pipeline வழியாக அனுப்பு.
        தமிழ், _ = சரிபார்(மூலம், தமிழ்)

        if (
            இடம்காட்டி_சரிபார்(மூலம், தமிழ்)
            and வடிவமைப்பு_சரிபார்(மூலம், தமிழ்)
        ):
            return தமிழ், குழப்பமானது, மூலம்_வகை

        # Memory entry invalid என்றால் online translation-க்கு fallback.
        print("நினைவக மொழிபெயர்ப்பு validation தோல்வி:", மூலம்)

    # 2. Protect placeholders
    பாதுகாப்பான_மூலம், இடம்காட்டிகள் = இடம்காட்டி_பாதுகாப்பு(மூலம்)

    # 3. Online translation
    கலவை, இணைய_குழப்பம், வெற்றி = இணையமொழி(
        பாதுகாப்பான_மூலம்,
        சேவையகம்,
    )

    if not வெற்றி:
        # Online translation தோல்வியுற்றால் source-ஐ translation ஆக
        # பயன்படுத்தாமல், fuzzy result ஆக மட்டும் திருப்பி விடு.
        return மூலம், True, "online-failed"

    # 4. Restore placeholders
    கலவை, இடம்காட்டி_வெற்றி = இடம்காட்டி_மீட்டெடு(
        கலவை,
        இடம்காட்டிகள்,
    )

    if not இடம்காட்டி_வெற்றி:
        print("Placeholder restore தோல்வி:", மூலம்)
        return கலவை, True, "placeholder-restore-failed"

    # 5. Terminology replacement
    கலவை, சொல்_குழப்பம் = பிறமொழி_தவிர்(கலவை)

    # 6. Validate / normalize known formatting corrections
    தமிழ், _ = சரிபார்(மூலம், கலவை)

    # 7. Validate placeholders
    இடம்காட்டி_சரி = இடம்காட்டி_சரிபார்(மூலம், தமிழ்)

    # 8. Validate formatting
    வடிவமைப்பு_சரி = வடிவமைப்பு_சரிபார்(மூலம், தமிழ்)

    if not இடம்காட்டி_சரி:
        print("Placeholder validation தோல்வி:", மூலம்)
        return தமிழ், True, "placeholder-validation-failed"

    if not வடிவமைப்பு_சரி:
        print("Formatting validation தோல்வி:", மூலம்)
        return தமிழ், True, "formatting-validation-failed"

    # Online translation successful; terminology replacement may be marked
    # fuzzy because it came from local terminology memory.
    குழப்பமானது = இணைய_குழப்பம் or சொல்_குழப்பம்

    return தமிழ், குழப்பமானது, "online"


# ---------------------------------------------------------------------------
# PO entry update
# ---------------------------------------------------------------------------

def பதிவு_மொழிபெயர்(பதிவு, சேவையகம்=0):
    """
    ஒரு PO entry-ஐ மொழிபெயர்த்து, fuzzy/confirmed flag-ஐ அமை.
    """

    src = பதிவு.msgid

    if src == "":
        src = பதிவு.msgctxt or ""

    if not src:
        return False

    மாற்றம் = False

    if பதிவு.msgid_plural:
        # Singular
        தமிழ், குழப்பமானது, நிலை = பொருள்_பெறு(
            பதிவு.msgid,
            சேவையகம்,
        )

        if தமிழ் and பதிவு.msgstr_plural.get(0) != தமிழ்:
            பதிவு.msgstr_plural[0] = தமிழ்
            மாற்றம் = True

        # Plural
        தமிழ், குழப்பமானது_2, நிலை_2 = பொருள்_பெறு(
            பதிவு.msgid_plural,
            சேவையகம்,
        )

        if தமிழ் and பதிவு.msgstr_plural.get(1) != தமிழ்:
            பதிவு.msgstr_plural[1] = தமிழ்
            மாற்றம் = True

        if 2 in பதிவு.msgstr_plural:
            if பதிவு.msgstr_plural.get(2) != தமிழ்:
                பதிவு.msgstr_plural[2] = தமிழ்
                மாற்றம் = True

        குழப்பமானது = குழப்பமானது or குழப்பமானது_2

    else:
        தமிழ், குழப்பமானது, நிலை = பொருள்_பெறு(
            பதிவு.msgid,
            சேவையகம்,
        )

        if தமிழ் and பதிவு.msgstr != தமிழ்:
            பதிவு.msgstr = தமிழ்
            மாற்றம் = True

    # mark fuzzy / confirmed
    if குழப்பமானது:
        if "fuzzy" not in பதிவு.flags:
            பதிவு.flags.append("fuzzy")
            மாற்றம் = True
    else:
        if "fuzzy" in பதிவு.flags:
            பதிவு.flags.remove("fuzzy")
            மாற்றம் = True

    return மாற்றம்


# ---------------------------------------------------------------------------
# PO translation
# ---------------------------------------------------------------------------

def எடுபொருள்மொழிபெயர்(
    அனைத்தும்=True,
    இருமம்=False,
    பாதை="./வெறுமை/*.po",
):
    """
    PO கோப்புகளை மொழிபெயர்க்கும்.

    ஒவ்வொரு entry-க்கும் worker thread உருவாக்காமல், ஒரு file-ஐ ஒரு main
    workflow-ல் sequential-ஆக process செய்கிறது. இதனால் ஒரே PO object-ஐ
    பல threads மாற்றுவதும், ஒவ்வொரு entry-க்கும் file save செய்வதும் தவிர்க்கப்படுகிறது.
    """

    for கோப்பு in glob.glob(பாதை):
        அ = அகராதி_திற(கோப்பு)

        முன் = அ.percent_translated()
        print(கோப்பு, "முன் : ", முன், "%")

        if அனைத்தும்:
            பதிவுகள் = list(அ.translated_entries()) + list(
                அ.untranslated_entries()
            )
        else:
            பதிவுகள் = list(அ.untranslated_entries())

        சேவையகம் = 0
        மாற்றம் = False

        for பதிவு in பதிவுகள்:
            if பதிவு.msgid == "":
                continue

            try:
                மாற்றம்_இந்த_பதிவு = பதிவு_மொழிபெயர்(
                    பதிவு,
                    சேவையகம்,
                )

                மாற்றம் = மாற்றம் or மாற்றம்_இந்த_பதிவு

                print(
                    பதிவு.msgid,
                    "=>",
                    பதிவு.msgstr,
                    "flags=",
                    பதிவு.flags,
                )

            except Exception as e:
                print("PO entry பிழை:", பதிவு.msgid, e)

                # இந்த entry-ஐ fuzzy ஆக வைத்துக்கொள்.
                if "fuzzy" not in பதிவு.flags:
                    பதிவு.flags.append("fuzzy")

                மாற்றம் = True

            # Translator server-ஐ ஒவ்வொரு entry-க்கும் மாற்றாமல்,
            # failure வந்தால் மட்டும் caller இங்கு policy மாற்றலாம்.
            #
            # தற்போது primary server-ஐ பயன்படுத்துகிறோம்.
            சேவையகம் = சேவையகம்

        # 9. Save — முழு file processing முடிந்த பிறகு ஒரே முறை.
        if மாற்றம்:
            அகராதி_சேமி(அ, இருமம்)

        print("பின் : ", அ.percent_translated(), "%")


# ---------------------------------------------------------------------------
# Terminology cleanup for existing PO files
# ---------------------------------------------------------------------------

def பிறமொழி_தவிர்_கோப்புகள்(பாதை):
    """கோப்புகளில் உள்ள பொருள்களை வரிசைபடுத்தும்"""
    for கோப்பு in glob.glob(பாதை):
        அ = அகராதி_திற(கோப்பு)
        சேமி = False

        for பதிவு in அ.translated_entries():
            முன் = பதிவு.msgstr
            பதிவு.msgstr, _ = பிறமொழி_தவிர்(பதிவு.msgstr)

            if பதிவு.msgstr != முன்:
                சேமி = True

        if சேமி:
            அகராதி_சேமி(அ)


def சரிபார்_கோப்புகள்(பாதை="./வெறுமை/*.po"):
    """கோப்புகளில் உள்ள பதிவுகளை சரிபார்க்கும்"""
    for கோப்பு in glob.glob(பாதை):
        அ = அகராதி_திற(கோப்பு)
        சேமி = False

        for பதிவு in அ.translated_entries():
            if பதிவு.msgid_plural:
                if 0 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[0], மாற்றம் = சரிபார்(
                        பதிவு.msgid,
                        பதிவு.msgstr_plural[0],
                    )
                    சேமி = சேமி or மாற்றம்

                if 1 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[1], மாற்றம் = சரிபார்(
                        பதிவு.msgid_plural,
                        பதிவு.msgstr_plural[1],
                    )
                    சேமி = சேமி or மாற்றம்

                if 2 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[2], மாற்றம் = சரிபார்(
                        பதிவு.msgid_plural,
                        பதிவு.msgstr_plural[2],
                    )
                    சேமி = சேமி or மாற்றம்

            else:
                பதிவு.msgstr, மாற்றம் = சரிபார்(
                    பதிவு.msgid,
                    பதிவு.msgstr,
                )
                சேமி = சேமி or மாற்றம்

        if சேமி:
            அகராதி_சேமி(அ)


# ---------------------------------------------------------------------------
# Translation memory maintenance
# ---------------------------------------------------------------------------

def பொருள்_சேர்(பொருள்கள், ஆங்கிலம்: str, தமிழ்: str, குழப்பமானது=False):
    """பொருள்கள் பட்டியலில் ஒரு பொருளை சேர்க்கும்"""
    தமிழ் = தமிழ்.strip().lower()
    ஆங்கிலம் = ஆங்கிலம்.strip().lower()

    பதிவு = பொருள்கள்.find(ஆங்கிலம்)

    if பதிவு is None:
        if குழப்பமானது:
            பதிவு = polib.POEntry(
                msgid=ஆங்கிலம்,
                msgstr=தமிழ்,
                flags=["fuzzy"],
            )
        else:
            பதிவு = polib.POEntry(
                msgid=ஆங்கிலம்,
                msgstr=தமிழ்,
            )

        பொருள்கள்.append(பதிவு)

    elif பதிவு.msgstr == பதிவு.msgid:
        பதிவு.msgstr = தமிழ்

    elif பதிவு.msgstr != தமிழ்:
        print(ஆங்கிலம்)
        print(பதிவு.msgstr, தமிழ்)


def அகராதி_மேம்படுத்து(
    அகராதி="./நினைவு/முடிந்தது.po",
    பாதை="./முடிந்தது/*.po",
):
    """பல கோப்புகளில் உள்ள சொற்களை நினைவில் ஏற்றி ஒரு கோப்பில் சேமி"""
    அ = அகராதி_திற(அகராதி)

    for கோப்பு in glob.glob(பாதை):
        ஆ = அகராதி_திற(கோப்பு)

        for பதிவு in ஆ.translated_entries():
            பொருள்_சேர்(
                அ,
                பதிவு.msgid,
                பதிவு.msgstr,
            )

        for பதிவு in ஆ.fuzzy_entries():
            பொருள்_சேர்(
                அ,
                பதிவு.msgid,
                பதிவு.msgstr,
                True,
            )

    அகராதி_சேமி(அ)
    return அ


def அகராதி_குழப்பம்நீக்கு(அகராதி, பதிவுநீக்கு=False):
    """
    போ கோப்பில் உள்ள அனைத்து தெளிவற்ற கொடி உள்ளீடுகளையும் அகற்றி,
    பதிவுநீக்கு உண்மையாக இருக்கும் போது, அது மொழிபெயர்ப்பு செய்தியையும்
    நீக்குகிறது.
    """
    அ = அகராதி_திற(அகராதி)

    for பதிவு in அ.fuzzy_entries():
        if பதிவுநீக்கு:
            if பதிவு.msgid_plural:
                for எண் in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[எண்] = ""
            else:
                பதிவு.msgstr = ""

        if "fuzzy" in பதிவு.flags:
            பதிவு.flags.remove("fuzzy")

    அகராதி_சேமி(அ)


# ---------------------------------------------------------------------------
# Translation-memory based file translation
# ---------------------------------------------------------------------------

class அகராதிஏற்று:
    def __init__(ஐ, பாதை="./நினைவு/முடிந்தது.po"):
        ஐ.தரவு = அகராதி_திற(பாதை)

    def தேடு(ஐ, வாக்கியம்):
        for a in ஐ.தரவு:
            if a.msgid == வாக்கியம் and a.msgstr:
                return a.msgstr
        return ""


def one_entry(பதிவு, a):
    """
    Translation memory-யிலிருந்து ஒரு PO entry-ஐ நிரப்பும்.
    """
    இ = a.தேடு(பதிவு.msgid)

    if பதிவு.msgid_plural:
        பதிவு.msgstr_plural[0] = இ

        ஈ = a.தேடு(பதிவு.msgid_plural)
        பதிவு.msgstr_plural[1] = ஈ

        # பதிவு.msgstr_plural = {0: இ, 1: ஈ}

        if 2 in பதிவு.msgstr_plural:
            பதிவு.msgstr_plural[2] = ஈ

            # பதிவு.msgstr_plural = {0: இ, 1: ஈ, 2: ஈ}

    else:
        பதிவு.msgstr = இ


def எடுபொருள்மொழி(
    அனைத்தும்=False,
    இருமம்=False,
    பாதை="./வெறுமை/*.po",
):
    """
    பழைய translation-memory-only workflow.
    """
    a = அகராதிஏற்று()

    for கோப்பு in glob.glob(பாதை):
        அ = அகராதி_திற(கோப்பு)

        if அனைத்தும்:
            அகராதி_குழப்பம்நீக்கு(கோப்பு, True)

        if அனைத்தும்:
            tr_entries = list(அ.translated_entries()) + list(
                அ.untranslated_entries()
            )
        else:
            tr_entries = list(அ.untranslated_entries())

        மாற்றம் = False

        for பதிவு in tr_entries:
            முன் = பதிவு.msgstr

            one_entry(பதிவு, a)

            if பதிவு.msgstr != முன்:
                மாற்றம் = True

        if மாற்றம்:
            அகராதி_சேமி(அ, இருமம்)

        sleep(1)


# ---------------------------------------------------------------------------
# Existing non-PO file translators
# ---------------------------------------------------------------------------

def சரங்கள்மொழிபெயர்(பாதை="./வெறுமை/*.strings"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, "r", encoding="utf-16") as அ:
            வரிகள் = அ.readlines()

        with open(கோப்பு + ".சரங்கள்", "w", encoding="utf-16") as ஆ:
            for வரி in வரிகள்:
                if வரி.startswith("/*"):
                    if வரி.startswith("/* Class"):
                        ஆ.write(வரி)
                    else:
                        try:
                            # /* "sUQ-Yx-bHF.title" = "Mount Location"; */
                            வ = வரி[3:-3]
                            ப, வ = வ.split(" = ", 1)
                            வ = வ[1:-1]

                            இ, _, _ = பொருள்_பெறு(வ)

                            இ = '"' + இ.replace('"', '\\"') + '";'
                            உ = " = ".join((ப, இ))

                            ஆ.write(உ)
                            ஆ.write("\n")
                            print(வரி, உ)

                        except Exception:
                            ஆ.write(வரி)
                else:
                    ஆ.write(வரி)


def பண்புகள்மொழிபெயர்_பழைய(பாதை="./வெறுமை/*.properties"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, "r", encoding="utf-8") as அ:
            வரிகள் = அ.readlines()

        with open(கோப்பு + ".பண்புகள்", "w", encoding="utf-8") as ஆ:
            for வரி in வரிகள்:
                if வரி.startswith("# "):
                    try:
                        # general.error						= Error
                        வ = வரி[2:-1]
                        ப, வ = வ.split("= ", 1)
                        வ = வ.strip()

                        இ, _, _ = பொருள்_பெறு(வ)
                        உ = "= ".join((ப, இ))

                        ஆ.write(உ)
                        ஆ.write("\n")
                        print(வரி, உ)

                    except Exception:
                        ஆ.write(வரி)
                else:
                    ஆ.write(வரி)


def பண்புகள்மொழிபெயர்(பாதை="./வெறுமை/*.properties"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, "r", encoding="utf-8") as அ:
            வரிகள் = அ.readlines()

        with open(கோப்பு + ".ப", "w", encoding="utf-8") as ஆ:
            for வரி in வரிகள்:
                if "=" in வரி and not வரி.lstrip().startswith(("#", "!")):
                    try:
                        # Save=
                        ப, வ = வரி.split("=", 1)
                        வ = வ.strip()

                        if வ != "":
                            இ, _, _ = பொருள்_பெறு(வ)
                            உ = "=".join((ப, இ))

                            ஆ.write(உ)
                            ஆ.write("\n")
                            print(உ)
                        else:
                            ஆ.write(வரி)

                    except Exception:
                        ஆ.write(வரி)
                else:
                    ஆ.write(வரி)


def டீடிடீமொழிபெயர்(பாதை="./வெறுமை/*en.dtd"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, "r", encoding="utf-8") as அ:
            வரிகள் = அ.readlines()

        with open(கோப்பு + ".தமிழ்", "w", encoding="utf-8") as ஆ:
            for வரி in வரிகள்:
                if வரி.startswith("<!ENTITY ") and வரி.endswith('">\n'):
                    try:
                        # <!ENTITY zotero.version		"version">
                        # <!ENTITY zotero.whatsNew "What’s new">
                        வ = வரி[:-3]
                        ப = வ.split('"')

                        ச = ப[-1]
                        ஊ = ப[0]

                        இ, _, _ = பொருள்_பெறு(ச)
                        உ = ஊ + '"' + இ + '">\n'

                        ஆ.write(உ)
                        print(வரி, உ)

                    except Exception:
                        ஆ.write(வரி)
                else:
                    ஆ.write(வரி)


def சேசன்மொழிபெயர்(பாதை="./வெறுமை/*.json"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, "r", encoding="utf-8") as அ:
            வரிகள் = அ.readlines()

        with open(கோப்பு + ".சேசன்", "w", encoding="utf-8") as ஆ:
            for வரி in வரிகள்:
                if (
                    வரி.startswith('        "message":')
                    and வரி.endswith('",\n')
                ):
                    try:
                        #         "message": "Done",
                        #         "message": "ஆம்",
                        வ = வரி[:-3]
                        ப, வி = வ.split(': "', 1)

                        இ, _, _ = பொருள்_பெறு(வி)
                        ஊ = ': "'.join((ப, இ))
                        உ = ஊ + '",\n'

                        ஆ.write(உ)
                        print(வரி, உ)

                    except Exception:
                        ஆ.write(வரி)
                else:
                    ஆ.write(வரி)


def சாதொபொகுசரம்(அகராதி: dict):
    அகர = {}

    for தரவு, மதிப்பு in அகராதி.items():
        if isinstance(மதிப்பு, dict):
            அகர[தரவு] = சாதொபொகுசரம்(மதிப்பு)

        elif isinstance(மதிப்பு, int):
            அகர[தரவு] = மதிப்பு

        elif isinstance(மதிப்பு, bool):
            அகர[தரவு] = மதிப்பு

        elif மதிப்பு is None:
            அகர[தரவு] = மதிப்பு

        else:
            இ, _, _ = பொருள்_பெறு(str(மதிப்பு))
            print(மதிப்பு, இ)
            அகர[தரவு] = இ

    return அகர


def சாதொபொகுமொழிபெயர்(பாதை="./வெறுமை/*.json"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, encoding="utf-8") as அ:
            தரவுகள் = json.load(அ)

        with open(
            கோப்பு + ".சன்",
            "w",
            encoding="utf-8",
        ) as ஆ:
            அகராதி = சாதொபொகுசரம்(தரவுகள்)
            test = json.dumps(
                அகராதி,
                ensure_ascii=False,
                indent=4,
            )
            ஆ.write(test)


def இனிமொழிபெயர்(பாதை="./வெறுமை/*.ini"):
    for கோப்பு in glob.glob(பாதை):
        with open(கோப்பு, "r", encoding="utf-8") as அ:
            வரிகள் = அ.readlines()

        with open(கோப்பு + ".இனி", "w", encoding="utf-8") as ஆ:
            for வரி in வரிகள்:
                if "=" in வரி and not வரி.lstrip().startswith(("#", ";")):
                    try:
                        # Save=
                        ப, வ = வரி.split("=", 1)
                        வ = வ.strip()

                        if வ != "":
                            இ, _, _ = பொருள்_பெறு(வ)
                            உ = "=".join((ப, இ))

                            ஆ.write(உ)
                            ஆ.write("\n")
                            print(உ)
                        else:
                            ஆ.write(வரி)

                    except Exception:
                        ஆ.write(வரி)
                else:
                    ஆ.write(வரி)


# ---------------------------------------------------------------------------
# Program entry point
# ---------------------------------------------------------------------------

if __name__ == "__main__":
    # Example:
    #
    # எடுபொருள்மொழிபெயர்(
    #     அனைத்தும்=False,
    #     இருமம்=True,
    #     பாதை="./வெறுமை/*.po",
    # )
    #
    # அனைத்தும்=False:
    #     untranslated entries மட்டும் மொழிபெயர்க்கப்படும்.
    #
    # அனைத்தும்=True:
    #     translated + untranslated entries அனைத்தும் மீண்டும் process செய்யப்படும்.
    #
    # இருமம்=True:
    #     PO உடன் MO file-மும் உருவாக்கப்படும்.

    எடுபொருள்மொழிபெயர்(
        அனைத்தும்=False,
        இருமம்=True,
        பாதை="./வெறுமை/*.po",
    )
