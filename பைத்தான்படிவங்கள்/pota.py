"""
எடுபொருள் கோப்புகள்
"""

import os
import glob
import time
import polib
# import translators as ts


def அகராதி_இருமபொருள்(பாதை):
    '''
    எடுபொருள் => இருமம்
    po கோப்பை mo கோப்பாக சேமி
    பாதை -> எடுபொருள் கோப்பு பாதை
    '''
    எடுபொருள்கள் = polib.pofile(பாதை)
    எடுபொருள்கள்.save_as_mofile(பாதை[:-2] + 'mo')


def அகராதி_எடுபொருள்(பாதை):
    '''
    இருமம் => எடுபொருள்
    mo கோப்பை po கோப்பாக சேமி
    பாதை -> இரும்கோப்பு பாதை
    '''
    இருமபொருள்கள் = polib.mofile(பாதை)
    இருமபொருள்கள்.save_as_pofile(பாதை[:-2] + 'po')


def அகராதி_திற(அகராதி):
    """அகராதி திற அல்லது உருவாக்கு"""
    if os.path.exists(அகராதி):
        பொருள்கள் = polib.pofile(அகராதி)
    else:
        பொருள்கள் = polib.POFile()
        பொருள்கள்.metadata = {
            'Project-Id-Version': 'தமிழ்_அகராதி_1.0',
            'Report-Msgid-Bugs-To': 'anishprabu.t@gmail.com',
            'POT-Creation-Date': '2054-01-01 59:59+0530',
            'PO-Revision-Date': '2055-01-01 59:59+0530',
            'Last-Translator': 'தமிழ்நேரம் <https://TamilNeram.github.io>',
            'Language-Team': 'தமிழ்நேரம் <https://TamilNeram.github.io>',
            'Language': 'ta',
            'MIME-Version': '1.0',
            'Content-Type': 'text/plain; charset=utf-8',
            'Content-Transfer-Encoding': '8bit',
            'Plural-Forms': 'nplurals=2; plural=n != 1;'
            # Translators:
            # தமிழ்நேரம்<https://TamilNeram.github.io>,2023
            #
        }
        பொருள்கள்.save(அகராதி)
    return பொருள்கள்


def அகராதி_சேமி(பொருள்கள், இருமம்=False):
    '''
    பொருளை தட்டில் சேமி.
    po - எடுத்துசெல்லதக்கபொருள் கோப்பு.
    mo - இருமபொருள் கோப்பு.
    '''
    பொருள்கள்.save()
    if இருமம்:
        பொருள்கள்.save_as_mofile(பொருள்கள்.பாதை[:-2] + 'mo')


def வரிசைபடுத்து_கோப்புகள்(பாதை):
    """கோப்புகளில் உள்ள பொருள்களை வரிசைபடுத்தும்"""
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        அ.sort()
        அ.save()


def இணையமொழி(ஆங்கிலம், சேவையகம்=0):
    """
    இணையத்திலிருந்து ஆங்கிலம் தமிழ் (கலப்பு) மொழிபெயர்ப்பு பெறு
    """
    சேவையகங்கள் = ['google', 'bing', 'Yandex']
    வ = சேவையகங்கள்[சேவையகம்% len(சேவையகங்கள்)]
    கலவை = ts.translate_text(ஆங்கிலம், translator=வ, from_language='en', to_language='ta')
    குழப்பமானது = True
    return கலவை, குழப்பமானது


def கோப்புமொழி(ஆங்கிலம், பாதை):
    """
    கோப்பிலிருந்து ஆங்கிலம் தமிழ் மொழிபெயர்ப்பு பெறு

    Returns:
        தமிழாக்கம்: ஆங்கில உரையின் தமிழாக்கம்
        குழப்பமானது: தெளிவான அல்லது குழப்பமான மொழிபெயர்ப்பு கொடி
    """
    தமிழ் = None
    குழப்பமானது = True
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        ஆ = அ.find(ஆங்கிலம்)
        if ஆ:
            தமிழ் = ஆ.msgstr
            குழப்பமானது = (ஆ.flags != [])
            break
    return தமிழ், குழப்பமானது


def வடமொழி_தவிர்(கலவை):
    குழப்பமானது = False
    வடமொழி_எழுத்துகள் = orddict({
        'ஸ': 'ச', 'ஜ': 'ச', 'க்ஷ': 'க்ச', 'ஷ': 'ச', 'ஸ்ரீ': 'திரு',
        'ஹௌ': 'ஔ', 'ஹோ': 'ஓ', 'ஹொ': 'ஒ', 'ஹை': 'ஐ',
        'ஹே': 'ஏ', 'ஹெ': 'எ',  'ஹூ': 'ஊ', 'ஹு': 'உ',
        'ஹீ': 'ஈ', 'ஹி': 'இ', 'ஹா': 'ஆ', 'ஹ': 'அ'})
    for வ, த in வடமொழி_எழுத்துகள்.items():
        if வ in கலவை:
            குழப்பமானது = True
            கலவை = கலவை.replace(வ, த, -1)
    சொற்கள் = கலவை.split(" ")
    கோப்புகள் = glob.glob('./நினைவு/*.po')
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        for பதிவு in அ.translated_entries():
            if பதிவு.msgid in கலவை:
                தமிழ் = கலவை.replace(பதிவு.msgid, பதிவு.msgstr, -1)
    return தமிழ், குழப்பமானது


def பொருள்_பெறு(ஆங்கிலம், சேவையகம்=0):
    """
    கோப்பிலிருந்து அல்லது இணையத்திலிருந்து ஆங்கிலம் தமிழ் மொழிபெயர்ப்பு பெறு

    Returns:
        தமிழாக்கம்: ஆங்கில உரையின் தமிழாக்கம்
        குழப்பமானது: தெளிவான அல்லது குழப்பமான மொழிபெயர்ப்பு கொடி
    """
    தமிழ், குழப்பமானது = கோப்புமொழி(ஆங்கிலம்.lower(), './நினைவு/*.po')
    if not தமிழ்:
        தமிழ், குழப்பமானது = கோப்புமொழி(ஆங்கிலம், './மொழிபெயர்ப்புகள்/*.po')
        if not தமிழ்:
            கலவை, குழப்பமானது = இணையமொழி(ஆங்கிலம், சேவையகம்)
            தமிழ், கு = வடமொழி_தவிர்(கலவை)
            குழப்பமானது = கு or குழப்பமானது
    return தமிழ், குழப்பமானது


def பொருள்_சேர்(பொருள்கள், ஆங்கிலம்: str, தமிழ்: str, குழப்பமானது=False):
    """பொருள்கள் பட்டியலில் ஒரு பொருளை சேர்க்கும் """
    தமிழ் = தமிழ்.strip()
    தமிழ் = தமிழ்.lower()
    ஆங்கிலம் = ஆங்கிலம்.strip()
    ஆங்கிலம் = ஆங்கிலம்.lower()
    பதிவு = பொருள்கள்.find(ஆங்கிலம்)
    if not பதிவு:
        if குழப்பமானது:
            பதிவு = polib.POEntry(
                msgid=ஆங்கிலம், msgstr=தமிழ், flags=['fuzzy'])
        else:
            பதிவு = polib.POEntry(msgid=ஆங்கிலம், msgstr=தமிழ்)
        பொருள்கள்.append(பதிவு)
    elif பதிவு.msgstr == பதிவு.msgid:
        பதிவு.msgstr = தமிழ்
    else:
        if பதிவு.msgstr != தமிழ்:
            print(ஆங்கிலம்)
            print(பதிவு.msgstr, தமிழ்)


def அகராதி_மேம்படுத்து():
    அ = அகராதி_திற('./நினைவு/அகராதி.po')
    பாதை = './மொழிபெயர்ப்புகள்/*.po'
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        ஆ = அகராதி_திற(கோப்பு)
        for பதிவு in ஆ.translated_entries():
            பொருள்_சேர்(அ, பதிவு.msgid, பதிவு.msgstr)
        for பதிவு in ஆ.fuzzy_entries():
            பொருள்_சேர்(அ, பதிவு.msgid, பதிவு.msgstr, True)
    அ.save()


def அகராதி_குழப்பம்நீக்கு(அகராதி, பதிவுநீக்கு=False):
    """
    Removes all the fuzzy flag entries in the po file and
    when the clear_tr is true it also removes
    the translation message as well.
    """
    அ = அகராதி_திற(அகராதி)
    for பதிவு in அ.fuzzy_entries():
        if பதிவுநீக்கு:
            பதிவு.msgstr = ''
            if பதிவு.msgid_plural:
                பதிவு.msgstr_plural[0] = ''
            if பதிவு.msgid_plural and 1 in பதிவு.msgstr_plural:
                பதிவு.msgstr_plural[1] = ''
            if பதிவு.msgid_plural and 2 in பதிவு.msgstr_plural:
                பதிவு.msgstr_plural[2] = ''
        பதிவு.flags.remove('fuzzy')
    அ.save()


def மொழிபெயர்(அனைத்தும்=False):
    கோப்புகள் = glob.glob('./வெறுமை/*.po')
    for கோப்பு in கோப்புகள்:
        அகராதி_குழப்பம்நீக்கு(கோப்பு)
        அ = அகராதி_திற(கோப்பு)
        வ = 0
        ஐ = 0
        முன் = அ.percent_translated()
        if முன் != 100:
            print(கோப்பு, "முன் : ", முன், "%")
            for பதிவு in அ.untranslated_entries():
                try:
                    if not பதிவு.msgid_plural:
                        இ, _ = பொருள்_பெறு(பதிவு.msgid, வ)
                        பதிவு.msgstr = இ
                        print(பதிவு.msgid, பதிவு.msgstr)
                    else:
                        இ, _ = பொருள்_பெறு(பதிவு.msgid, வ)
                        ஈ, _ = பொருள்_பெறு(பதிவு.msgid_plural, வ)
                        பதிவு.msgstr_plural = {0:இ, 1:ஈ}
                        print(பதிவு.msgid, பதிவு.msgid_plural, பதிவு.msgstr_plural)
                except Exception as e:
                    print(e)
                    அ.save(கோப்பு)
                    time.sleep(5)
                    வ += 1
                else:
                    ஐ += 1
                    if ஐ == 10:
                        அ.save(கோப்பு)
                        ஐ = 0
                if வ == 5:
                    break
            if அனைத்தும்:
                for பதிவு in அ.translated_entries():
                    try:
                        if not பதிவு.msgid_plural:
                            if பதிவு.msgid == பதிவு.msgstr:
                                இ, _ = பொருள்_பெறு(பதிவு.msgid, வ)
                                பதிவு.msgstr = இ
                                print(பதிவு.msgid, பதிவு.msgstr)
                        else:
                            if (பதிவு.msgid == பதிவு.msgstr[0]) or (பதிவு.msgid_plural == பதிவு.msgstr[1]):
                                இ, _ = பொருள்_பெறு(பதிவு.msgid, வ)
                                ஈ, _ = பொருள்_பெறு(பதிவு.msgid_plural, வ)
                                பதிவு.msgstr_plural = {0:இ, 1:ஈ}
                                print(பதிவு.msgid, பதிவு.msgid_plural, பதிவு.msgstr_plural)
                    except Exception as e:
                        print(e)
                        அ.save(கோப்பு)
                        time.sleep(5)
                        வ += 1
                    else:
                        ஐ += 1
                        if ஐ == 1:
                            அ.save(கோப்பு)
                            ஐ = 0
                    if வ == 5:
                        break
            அ.save(கோப்பு)
            print("பின் : ", அ.percent_translated(), "%")


def குழப்பம்திருத்து(அகராதி, பதிவுநீக்கு=False):
    """
    மாற்று அனைத்து குழப்பம்
    """
    அ = அகராதி_திற(அகராதி)
    for பதிவு in அ.fuzzy_entries():
        க = பதிவு.msgstr
        # ப = க.split(",")
        # ப2 = ப[1:]
        # ப2.append(ப[0])
        # print(ப2)
        # க = " ".join(ப2)
        பதிவு.msgstr = க.strip()
        print(பதிவு.msgstr)
    அ.save()


if __name__ == "__main__":
    # அகராதி_மேம்படுத்து()
    # மொழிபெயர்()
    #மொழிபெயர்(True)
    # குழப்பம்திருத்து("./வெறுமை/iso-codes-iso-639-3-ta.po")
    வரிசைபடுத்து_கோப்புகள்('./நினைவு/*.po')
