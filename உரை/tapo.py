"""
எடுபொருள் கோப்புகள்
"""

import os
import re
import glob
import polib
import json
import datetime
import translators as ts
from collections import OrderedDict

# from google_trans_new import google_translator

ஃ = None
ஔ = None
நினைவில் = ""
# g_tr = google_translator()


def அகராதி_இருமபொருள்(பாதை):
    """
    எடுபொருள் => இருமம்
    எபொ கோப்பை கபொ கோப்பாக சேமி
    பாதை -> எடுபொருள் கோப்பு பாதை
    """
    எடுபொருள்கள் = polib.pofile(பாதை)
    எடுபொருள்கள்.save_as_mofile(பாதை[:-2] + "mo")


def அகராதி_எடுபொருள்(பாதை):
    """
    இருமம் => எடுபொருள்
    கபொ கோப்பை எபொ கோப்பாக சேமி
    பாதை -> இரும்கோப்பு பாதை
    """
    இருமபொருள்கள் = polib.mofile(பாதை)
    இருமபொருள்கள்.save_as_pofile(பாதை[:-2] + "po")


def எபொநேரம்():
    """எடுபொருள் நேரமுத்திரையை உருவாக்கி வழங்கு

    Returns:
        str: நேரமுத்திரை சரம்
    """
    இப்பொழுது = datetime.datetime.now()
    # இப்பொழுது.year += 31
    # இப்பொழுது.day += 15
    இ = இப்பொழுது.strftime("%Y-%m-%d %H:%M")
    return இ


def அகராதி_திற(அகராதி):
    """அகராதி திற அல்லது உருவாக்கு"""
    if os.path.exists(அகராதி):
        பொருள்கள் = polib.pofile(அகராதி)
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
            #
        }
        பொருள்கள்.metadata["PO-Revision-Date"] = எபொநேரம்()
        பொருள்கள்.save(அகராதி)
        பொருள்கள் = polib.pofile(அகராதி)
    பொருள்கள்.பாதை = அகராதி
    return பொருள்கள்


def அகராதி_சேமி(பொருள்கள், இருமம்=False):
    """
    பொருளை தட்டில் சேமி.
    எபொ - எடுத்துசெல்லதக்கபொருள் கோப்பு.
    கபொ - இருமபொருள் கோப்பு.
    """
    பொருள்கள்.metadata["PO-Revision-Date"] = எபொநேரம்()
    பொருள்கள்.save()
    if இருமம்:
        பொருள்கள்.save_as_mofile(பொருள்கள்.பாதை[:-2] + "mo")


def வரிசைபடுத்து_கோப்புகள்(பாதை):
    """கோப்புகளில் உள்ள பொருள்களை வரிசைபடுத்தும்"""
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        அ.sort()
        அகராதி_சேமி(அ)


def இணையமொழி(ஆங்கிலம், சேவையகம்=0):
    """
    இணையத்திலிருந்து ஆங்கிலம் தமிழ் (கலப்பு) மொழிபெயர்ப்பு பெறு
    """
    சேவையகங்கள் = ["google", "bing", "Yandex"]
    வ = சேவையகங்கள்[சேவையகம் % len(சேவையகங்கள்)]
    குழப்பமானது = True
    கலவை = ஆங்கிலம்
    try:
        கலவை = ts.translate_text(
            ஆங்கிலம், translator=வ, from_language="auto", to_language="ta"
        )
        if கலவை == ".":
            கலவை = ஆங்கிலம்
    except Exception as e:
        print(வ, ஆங்கிலம், e)
    return கலவை, குழப்பமானது


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
    if நினைவில் != பாதை:
        நினைவில் = பாதை
        ஔ = அகராதி_திற(பாதை)
    ஆ = ஔ.find(ஆங்கிலம்.lower())
    if ஆ:
        தமிழ் = ஆ.msgstr
        குழப்பமானது = ஆ.flags != []
    return தமிழ், குழப்பமானது


def பிறமொழி_தவிர்(கலவை):
    global ஃ
    if not ஃ:
        ஃ = அகராதி_திற("./நினைவு/பின்மொழி.po")
    எழுத்து = அகராதி_திற("./நினைவு/பின்எழுத்து.po")
    குழப்பமானது = False
    for எ in எழுத்து.translated_entries():
        if எ.msgid in கலவை:
            குழப்பமானது = True
            கலவை = கலவை.replace(எ.msgid, எ.msgstr, -1)
    பிற_சொற்கள் = கலவை.split(" ")
    சொற்கள் = []
    for பிற_சொல் in பிற_சொற்கள்:
        முதல் = ""
        முடிவு = ""
        if பிற_சொல்.startswith('"'):
            முதல் = '"'
            பிற_சொல் = பிற_சொல்[1:]
        elif பிற_சொல்.startswith("'"):
            முதல் = "'"
            பிற_சொல் = பிற_சொல்[1:]
        elif பிற_சொல்.startswith(":"):
            முதல் = ":"
            பிற_சொல் = பிற_சொல்[1:]

        if பிற_சொல்.endswith(","):
            முடிவு = ","
            பிற_சொல் = பிற_சொல்[:-1]
        elif பிற_சொல்.endswith("."):
            முடிவு = "."
            பிற_சொல் = பிற_சொல்[:-1]
        elif பிற_சொல்.endswith('"'):
            முடிவு = '"'
            பிற_சொல் = பிற_சொல்[:-1]
        elif பிற_சொல்.endswith("'"):
            முடிவு = "'"
            பிற_சொல் = பிற_சொல்[:-1]
        elif பிற_சொல்.endswith('."'):
            முடிவு = '."'
            பிற_சொல் = பிற_சொல்[:-2]
        elif பிற_சொல்.endswith(".'"):
            முடிவு = ".'"
            பிற_சொல் = பிற_சொல்[:-2]
        elif பிற_சொல்.endswith("\n"):
            முடிவு = "\n"
            பிற_சொல் = பிற_சொல்[:-1]
        elif பிற_சொல்.endswith(".\n"):
            முடிவு = ".\n"
            பிற_சொல் = பிற_சொல்[:-2]
        சொல் = பிற_சொல்
        ஆ = ஃ.find(பிற_சொல்.lower())
        if ஆ:
            சொல் = ஆ.msgstr
        சொல் = முதல் + சொல் + முடிவு
        சொற்கள்.append(சொல்)
    தமிழ் = " ".join(சொற்கள்)
    return தமிழ், குழப்பமானது


def பிறமொழி_தவிர்_கோப்புகள்(பாதை):
    """கோப்புகளில் உள்ள பொருள்களை வரிசைபடுத்தும்"""
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        சேமி = False
        for பதிவு in அ.translated_entries():
            முன் = பதிவு.msgstr
            பதிவு.msgstr, _ = பிறமொழி_தவிர்(பதிவு.msgstr)
            மாற்றம் = பதிவு.msgstr != முன்
            சேமி = சேமி or மாற்றம்
        if சேமி:
            அகராதி_சேமி(அ)


def சரிபார்(மூலம், தமிழ்):
    """பதிவு சரிபார்"""
    மாற்றம் = False
    முன் = தமிழ்
    if மூலம்.endswith("\n") and not தமிழ்.endswith("\n"):
        தமிழ் += "\n"
    if மூலம்.startswith("\n") and not தமிழ்.startswith("\n"):
        தமிழ் = "\n" + தமிழ்
    if மூலம்.find("%s") >= 0:
        தமிழ் = தமிழ்.replace("%கள்", "%s")
        தமிழ் = தமிழ்.replace("% கள்", "%s")
        தமிழ் = தமிழ்.replace("%எச்", "%s")
        தமிழ் = தமிழ்.replace("% எச்", "%s")
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

    # regular expression based replacements - {pyvariable}
    அடை_var = re.findall(r"{[a-z_A-Z0-9 \.:]+}", மூலம்)
    அடை_மாறி = re.findall(r"{[a-z_A-Z0-9 \.:ஂ-௺]+}", தமிழ்)
    if அடை_மாறி and அடை_var:
        for மாறி, var in zip(அடை_மாறி, அடை_var):
            தமிழ் = தமிழ்.replace(மாறி, var, 1)

    # regular expression based replacements - {{sometext}}
    அடை_var = re.findall(r"{{[a-z_A-Z0-9 \.]+}}", மூலம்)
    அடை_மாறி = re.findall(r"{{[a-z_A-Z0-9 \.ஂ-௺]+}}", தமிழ்)
    if அடை_மாறி and அடை_var:
        for மாறி, var in zip(அடை_மாறி, அடை_var):
            தமிழ் = தமிழ்.replace(மாறி, var, 1)

    # regular expression based replacements - %(sometext)s
    அடை_var = re.findall(r"%\([a-z_A-Z]+\)s", மூலம்)
    அடை_மாறி = re.findall(r"%\([a-z_A-Zஂ-௺]+\)[ ]*[sSகள்ைஎசிலஇன]+", தமிழ்)
    if அடை_மாறி and அடை_var:
        for மாறி, var in zip(அடை_மாறி, அடை_var):
            தமிழ் = தமிழ்.replace(மாறி, var, 1)

    # regular expression based replacements - %(sometext)d
    அடை_var = re.findall(r"%\([a-z_A-Z]+\)d", மூலம்)
    அடை_மாறி = re.findall(r"%\([a-z_A-Zஂ-௺ ]+\)[ ]*[dDடி]+", தமிழ்)
    if அடை_மாறி and அடை_var:
        for மாறி, var in zip(அடை_மாறி, அடை_var):
            தமிழ் = தமிழ்.replace(மாறி, var, 1)

    # இயல்பான மாற்றம்
    தமிழ் = தமிழ்.replace("மீண்டும் மீண்டும்", "மறுநிகழ்வு")

    மாற்றம் = தமிழ் != முன்
    return தமிழ், மாற்றம்


def சரிபார்_கோப்புகள்(பாதை="./வெறுமை/*.po"):
    """கோப்புகளில் உள்ள பதிவுகளை சரிபார்க்கும்"""
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        சேமி = False
        for பதிவு in அ.translated_entries():
            if பதிவு.msgid_plural:
                பதிவு.msgstr_plural[0], மாற்றம் = சரிபார்(
                    பதிவு.msgid, பதிவு.msgstr_plural[0]
                )
                சேமி = சேமி or மாற்றம்
                if 1 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[1], மாற்றம் = சரிபார்(
                        பதிவு.msgid_plural, பதிவு.msgstr_plural[1]
                    )
                    சேமி = சேமி or மாற்றம்
                if 2 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[2], மாற்றம் = சரிபார்(
                        பதிவு.msgid_plural, பதிவு.msgstr_plural[2]
                    )
                    சேமி = சேமி or மாற்றம்
            else:
                பதிவு.msgstr, மாற்றம் = சரிபார்(பதிவு.msgid, பதிவு.msgstr)
                சேமி = சேமி or மாற்றம்
        if சேமி:
            அகராதி_சேமி(அ)


def பொருள்_பெறு(ஆங்கிலம், சேவையகம்=0):
    """
    கோப்பிலிருந்து அல்லது இணையத்திலிருந்து ஆங்கிலம் தமிழ் மொழிபெயர்ப்பு பெறு

    Returns:
        தமிழாக்கம்: ஆங்கில உரையின் தமிழாக்கம்
        குழப்பமானது: தெளிவான அல்லது குழப்பமான மொழிபெயர்ப்பு கொடி
    """
    if ஆங்கிலம்:
        தமிழ், குழப்பமானது = கோப்புமொழி(ஆங்கிலம், "./நினைவு/அகராதி.po")
        if not தமிழ்:
            தமிழ், குழப்பமானது = கோப்புமொழி(ஆங்கிலம், "./நினைவு/பின்மொழி.po")
            if not தமிழ்:
                முதல் = "!["
                if ஆங்கிலம்.startswith(முதல்):
                    ஆங்கிலம் = ஆங்கிலம்[len(முதல்):]
                    கலவை, குழப்பமானது = இணையமொழி(ஆங்கிலம், சேவையகம்)
                    கலவை = முதல் + கலவை
                else:
                    கலவை, குழப்பமானது = இணையமொழி(ஆங்கிலம், சேவையகம்)
                சொற்கள் = கலவை.split(" ")
                புதிய_சொற்கள் = []
                for சொல் in சொற்கள்:
                    தமிழ்_சொல், குழப்பமானது = கோப்புமொழி(சொல், "./நினைவு/அகராதி.po")
                    if not தமிழ்_சொல்:
                        தமிழ்_சொல், குழப்பமானது = கோப்புமொழி(சொல், "./நினைவு/பின்மொழி.po")
                        if not தமிழ்_சொல்:
                            தமிழ்_சொல் = சொல்
                    புதிய_சொற்கள்.append(தமிழ்_சொல்)
                கலவை = " ".join(புதிய_சொற்கள்)
                தமிழ், கு = பிறமொழி_தவிர்(கலவை)
                தமிழ், கு = சரிபார்(ஆங்கிலம், தமிழ்)  # பிழைநீக்கு
                குழப்பமானது = கு or குழப்பமானது
    else:
        தமிழ், குழப்பமானது = ஆங்கிலம், True
    return தமிழ், குழப்பமானது


def பொருள்_சேர்(பொருள்கள், ஆங்கிலம்: str, தமிழ்: str, குழப்பமானது=False):
    """பொருள்கள் பட்டியலில் ஒரு பொருளை சேர்க்கும்"""
    தமிழ் = தமிழ்.strip()
    தமிழ் = தமிழ்.lower()
    ஆங்கிலம் = ஆங்கிலம்.strip()
    ஆங்கிலம் = ஆங்கிலம்.lower()
    பதிவு = பொருள்கள்.find(ஆங்கிலம்)
    if not பதிவு:
        if குழப்பமானது:
            பதிவு = polib.POEntry(msgid=ஆங்கிலம், msgstr=தமிழ், flags=["fuzzy"])
        else:
            பதிவு = polib.POEntry(msgid=ஆங்கிலம், msgstr=தமிழ்)
        பொருள்கள்.append(பதிவு)
    elif பதிவு.msgstr == பதிவு.msgid:
        பதிவு.msgstr = தமிழ்
    else:
        if பதிவு.msgstr != தமிழ்:
            print(ஆங்கிலம்)
            print(பதிவு.msgstr, தமிழ்)


def அகராதி_மேம்படுத்து(அகராதி="./நினைவு/முடிந்தது.po", பாதை="./முடிந்தது/*.po"):
    """பல கோப்புகளில் உள்ள சொற்களை நினைவில் ஏற்றி ஒரு கோப்பில் சேமி"""
    அ = அகராதி_திற(அகராதி)
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        ஆ = அகராதி_திற(கோப்பு)
        for பதிவு in ஆ.translated_entries():
            பொருள்_சேர்(அ, பதிவு.msgid, பதிவு.msgstr)
        for பதிவு in ஆ.fuzzy_entries():
            பொருள்_சேர்(அ, பதிவு.msgid, பதிவு.msgstr, True)
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
                பதிவு.msgstr_plural[0] = ""
                if 1 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[1] = ""
                if 2 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[2] = ""
            else:
                பதிவு.msgstr = ""
        பதிவு.flags.remove("fuzzy")
    அகராதி_சேமி(அ)


def எடுபொருள்மொழிபெயர்(அனைத்தும்=True, இருமம்=False, பாதை="./வெறுமை/*.po"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        if அனைத்தும்:
            அகராதி_குழப்பம்நீக்கு(கோப்பு, True)
        அ = அகராதி_திற(கோப்பு)
        முன் = அ.percent_translated()
        print(கோப்பு, "முன் : ", முன், "%")
        if முன் != 100:
            tr_entries = அ.untranslated_entries()
            for பதிவு in tr_entries:
                src = பதிவு.msgid
                if src == "":
                    src = பதிவு.msgctxt
                இ, _ = பொருள்_பெறு(src)
                if பதிவு.msgid_plural:
                    பதிவு.msgstr_plural[0] = இ
                    ஈ, _ = பொருள்_பெறு(பதிவு.msgid_plural)
                    பதிவு.msgstr_plural[1] = ஈ
                    # பதிவு.msgstr_plural = {0: இ, 1: ஈ}
                    if 2 in பதிவு.msgstr_plural:
                        பதிவு.msgstr_plural[2] = ஈ
                        # பதிவு.msgstr_plural = {0: இ, 1: ஈ, 2: ஈ}
                    print(பதிவு.msgid, பதிவு.msgid_plural, பதிவு.msgstr_plural)
                else:
                    பதிவு.msgstr = இ
                    print(பதிவு.msgid, பதிவு.msgstr)
                அகராதி_சேமி(அ, இருமம்)


def சரங்கள்மொழிபெயர்(பாதை="./வெறுமை/*.strings"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = open(கோப்பு, "r", encoding="utf-16")
        வரிகள் = அ.readlines()
        ஆ = open(கோப்பு + ".சரங்கள்", "w", encoding="utf-16")
        for வரி in வரிகள்:
            if வரி.startswith("/*"):
                if வரி.startswith("/* Class"):
                    ஆ.write(வரி)
                else:
                    try:
                        # /* "sUQ-Yx-bHF.title" = "Mount Location"; */
                        வ = வரி[3:-3]
                        ப, வ = வ.split(" = ")
                        வ = வ[1:-3]
                        இ, _ = பொருள்_பெறு(வ)
                        இ = '"' + இ + '";'
                        உ = " = ".join((ப, இ))
                        ஆ.write(உ)
                        ஆ.write("\n")
                        print(வரி, உ)
                    except Exception:
                        ஆ.write(வரி)
            else:
                ஆ.write(வரி)
        அ.close()
        ஆ.close()


def பண்புகள்மொழிபெயர்_பழைய(பாதை="./வெறுமை/*.properties"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = open(கோப்பு, "r", encoding="utf-8")
        வரிகள் = அ.readlines()
        ஆ = open(கோப்பு + ".பண்புகள்", "w", encoding="utf-8")
        for வரி in வரிகள்:
            if வரி.startswith("# "):
                try:
                    # general.error						= Error
                    வ = வரி[2:-1]
                    ப, வ = வ.split("= ")
                    வ = வ.strip()
                    இ, _ = பொருள்_பெறு(வ)
                    உ = "= ".join((ப, இ))
                    ஆ.write(உ)
                    ஆ.write("\n")
                    print(வரி, உ)
                except Exception:
                    ஆ.write(வரி)
            else:
                ஆ.write(வரி)
        அ.close()
        ஆ.close()


def பண்புகள்மொழிபெயர்(பாதை="./வெறுமை/*.properties"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = open(கோப்பு, "r", encoding="utf-8")
        வரிகள் = அ.readlines()
        ஆ = open(கோப்பு + ".ப", "w", encoding="utf-8")
        for வரி in வரிகள்:
            if வரி.find("=") != 0:
                try:
                    # Save=
                    ப, வ = வரி.split("=")
                    வ = வ.strip()
                    if வ == "":
                        இ, _ = பொருள்_பெறு(ப)
                        உ = "=".join((ப, இ))
                        ஆ.write(உ)
                        ஆ.write("\n")
                        print(உ)
                except Exception:
                    ஆ.write(வரி)
            else:
                ஆ.write(வரி)
        அ.close()
        ஆ.close()


def டீடிடீமொழிபெயர்(பாதை="./வெறுமை/*en.dtd"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = open(கோப்பு, "r")
        வரிகள் = அ.readlines()
        ஆ = open(கோப்பு + ".தமிழ்", "w")
        for வரி in வரிகள்:
            if வரி.startswith("<!ENTITY ") and வரி.endswith('">\n'):
                try:
                    # <!ENTITY zotero.version		"version">
                    # <!ENTITY zotero.whatsNew "What’s new">
                    வ = வரி[0:-3]
                    ப = வ.split('"')
                    print(ப)
                    ச = ப[-1]
                    ஊ = ப[0]
                    இ, _ = பொருள்_பெறு(ச)
                    உ = ஊ + '"' + இ + '">\n'
                    ஆ.write(உ)
                    print(வரி, உ)
                except Exception:
                    ஆ.write(வரி)
            else:
                ஆ.write(வரி)
        அ.close()
        ஆ.close()


def சேசன்மொழிபெயர்(பாதை="./வெறுமை/*.json"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = open(கோப்பு, "r")
        வரிகள் = அ.readlines()
        ஆ = open(கோப்பு + ".சேசன்", "w")
        for வரி in வரிகள்:
            if வரி.startswith('        "message":') and வரி.endswith('",\n'):
                try:
                    #         "message": "Done",
                    #         "message": "ஆம்",
                    வ = வரி[0:-3]
                    ப, வி = வ.split(': "')
                    இ, _ = பொருள்_பெறு(வி)
                    ஊ = ': "'.join((ப, இ))
                    உ = ஊ + '",\n'
                    ஆ.write(உ)
                    print(வரி, உ)
                except Exception:
                    ஆ.write(வரி)
            else:
                ஆ.write(வரி)
        அ.close()
        ஆ.close()


def சாதொபொகுசரம்(அகராதி: dict):
    அகர = {}
    for தரவு, மதிப்பு in அகராதி.items():
        if isinstance(மதிப்பு, dict):
            அகர[தரவு] = சாதொபொகுசரம்(மதிப்பு)
        elif isinstance(மதிப்பு, int):
            அகர[தரவு] = மதிப்பு
        else:
            இ, _ = பொருள்_பெறு(மதிப்பு)
            print(மதிப்பு, இ)
            அகர[தரவு] = இ
    return அகர


def சாதொபொகுமொழிபெயர்(பாதை="./வெறுமை/*.json"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        with open(கோப்பு) as அ:
            தரவுகள் = json.load(அ)
            with open(கோப்பு + ".சன்", "w") as ஆ:
                அகராதி = சாதொபொகுசரம்(தரவுகள்)
                test = json.dumps(அகராதி, ensure_ascii=False)
                ஆ.seek(0)
                ஆ.write(test)


def இனிமொழிபெயர்(பாதை="./வெறுமை/*.ini"):
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = open(கோப்பு, "r", encoding="utf-8")
        வரிகள் = அ.readlines()
        ஆ = open(கோப்பு + ".இனி", "w", encoding="utf-8")
        for வரி in வரிகள்:
            if வரி.find("=") != 0:
                try:
                    # Save=
                    ப, வ = வரி.split("=")
                    வ = வ.strip()
                    if வ != "":
                        இ, _ = பொருள்_பெறு(வ)
                        உ = "=".join((ப, இ))
                        ஆ.write(வ, இ)
                        ஆ.write("\n")
                        print(உ)
                    else:
                        ஆ.write(வரி)
                except Exception:
                    ஆ.write(வரி)
            else:
                ஆ.write(வரி)
        அ.close()
        ஆ.close()


class அகராதிஏற்று:
    def __init__(ஐ, பாதை="./நினைவு/முடிந்தது.po"):
        ஐ.தரவு = அகராதி_திற(பாதை)

    def தேடு(ஐ, வாக்கியம்):
        print(வாக்கியம்)
        for a in ஐ.தரவு:
            if a.msgid == வாக்கியம்:
                return a.msgstr
        return ""


def எடுபொருள்மொழி(அனைத்தும்=False, இருமம்=False, பாதை="./வெறுமை/*.po"):
    a = அகராதிஏற்று()
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        if அனைத்தும்:
            அகராதி_குழப்பம்நீக்கு(கோப்பு, True)
        அ = அகராதி_திற(கோப்பு)
        முன் = அ.percent_translated()
        print(கோப்பு, "முன் : ", முன், "%")
        if முன் != 100:
            tr_entries = அ.untranslated_entries()
            if அனைத்தும்:
                tr_entries.add(அ.translated_entries())
            for பதிவு in tr_entries:
                இ = a.தேடு(பதிவு.msgid)
                if பதிவு.msgid_plural:
                    பதிவு.msgstr_plural[0] = இ
                    ஈ = a.தேடு(பதிவு.msgid_plural)
                    பதிவு.msgstr_plural[1] = ஈ
                    # பதிவு.msgstr_plural = {0: இ, 1: ஈ}
                    if 2 in பதிவு.msgstr_plural:
                        பதிவு.msgstr_plural[2] = ஈ
                        # பதிவு.msgstr_plural = {0: இ, 1: ஈ, 2: ஈ}
                    print(பதிவு.msgid, பதிவு.msgid_plural, பதிவு.msgstr_plural)
                else:
                    பதிவு.msgstr = இ
                    print(பதிவு.msgid, பதிவு.msgstr)
                அகராதி_சேமி(அ, இருமம்)
            print("பின் : ", அ.percent_translated(), "%")
