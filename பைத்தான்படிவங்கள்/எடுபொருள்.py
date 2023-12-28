"""
எடுபொருள் கோப்புகள் 
"""

import os
import glob
import time
import translators as ts
import polib

def இணையமொழி(ஆங்கிலம், சேவையகம்=0):
    """இணையத்தில் இருந்து ஆங்கிலம் தமிழ் மொழிபெயர்ப்பு பெறு"""
    வழங்குபவர்கள் = ['google', 'bing']
    வ = வழங்குபவர்கள்[சேவையகம்%2]
    தமிழ் = ts.translate_text(ஆங்கிலம், translator=வ, from_language = 'en', to_language = 'ta')
    குழப்பமானது = True 
    return தமிழ், குழப்பமானது


def கோப்புமொழி(ஆங்கிலம், பாதை):
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

def அகராதி_திற(அகராதி = './நிறைவு/அகராதி.po'):
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

def அகராதி_சேமி(பொருள்கள், இருமம் = False ):
    '''
    பொருளை தட்டில் சேமி.
    po - எடுத்துசெல்லதக்கபொருள் கோப்பு.
    mo - இருமபொருள் கோப்பு.
    '''
    பொருள்கள்.save()
    if இருமம்:
        பொருள்கள்.save_as_mofile(பொருள்கள்.பாதை[:-2] + 'mo')

def வரிசைபடுத்து_கோப்புகள்(பாதை = './மொழிபெயர்ப்புகள்/*.po' ):
    """கோப்புகளில் உள்ள பொருள்களை வரிசைபடுத்தும்"""
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        அ = அகராதி_திற(கோப்பு)
        அ.sort()
        அ.save()
    
def பொருள்_சேர்(பொருள்கள், ஆங்கிலம் :str, தமிழ் :str, குழப்பமானது = False ):
    """பொருள்கள் பட்டியலில் ஒரு பொருளை சேர்க்கும் """
    தமிழ் = தமிழ்.strip()
    ஆங்கிலம் = ஆங்கிலம்.strip()
    பதிவு = பொருள்கள்.find(ஆங்கிலம்)
    if not பதிவு:
        if குழப்பமானது:
            பதிவு = polib.POEntry(msgid = ஆங்கிலம், msgstr = தமிழ், flags=['fuzzy'])
        else:
            பதிவு = polib.POEntry(msgid = ஆங்கிலம், msgstr = தமிழ்)
        பொருள்கள்.append(பதிவு)
    elif பதிவு.msgstr == பதிவு.msgid:
        பதிவு.msgstr = தமிழ்
    else:
        if பதிவு.msgstr != தமிழ்:
            print( ஆங்கிலம்)
            print( பதிவு.msgstr, தமிழ்)


def அகராதி_மேம்படுத்து(பாதை = './மொழிபெயர்ப்புகள்/*.po'):
    அ = அகராதி_திற()
    பாதை = ''
    கோப்புகள் = glob.glob(பாதை)
    for கோப்பு in கோப்புகள்:
        ஆ = அகராதி_திற(கோப்பு)
        for பதிவி in ஆ.translated_entries():
            பொருள்_சேர்(அ, பதிவி.msgid, பதிவி.msgstr)
        for பதிவி in ஆ.fuzzy_entries():
            பொருள்_சேர்(அ, பதிவி.msgid, பதிவி.msgstr, True)
    அ.save()
    
    
def அகராதி_குழப்பம்நீக்கு(அகராதி, பதிவுநீக்கு=False):
    """
    Removes all the fuzzy flag entries in the po file and when the clear_tr is true it also removes
    the translation message as well.
    """
    அ = அகராதி_திற(அகராதி)
    for பதிவி in அ.fuzzy_entries():
        if பதிவுநீக்கு:
            பதிவி.msgstr = ''
            if பதிவி.msgid_plural: பதிவி.msgstr_plural[0] = ''
            if பதிவி.msgid_plural and 1 in பதிவி.msgstr_plural: பதிவி.msgstr_plural[1] = ''
            if பதிவி.msgid_plural and 2 in பதிவி.msgstr_plural: பதிவி.msgstr_plural[2] = ''
        பதிவி.flags.remove('fuzzy')
    அ.save()



def மொழிபெயர்(கோப்பு):
    po = அகராதி_திற(கோப்பு)
    வ = 0
    pretrans = po.percent_translated()
    if pretrans != 100:
        print(கோப்பு)
        print("Before : ",pretrans,"%")
        எண்ணிக்கை = 0
        # for removing fuzzy entries 
        for பதிவு in po.fuzzy_entries():
            பதிவு.flags.remove("fuzzy")
        
        for பதிவு in po.untranslated_entries():
            try:
                print(பதிவு.msgid)
                if not பதிவு.msgid_plural:
                    பதிவு.msgstr=இணையமொழி(பதிவு.msgid, வ)
                    print(பதிவு.msgstr)
                else:
                    பதிவு.msgstr[0]=இணையமொழி(பதிவு.msgid, வ)
                    # if 1 in பதிவு.msgstr_plural:
                    பதிவு.msgstr[1]=ts.translate_text(பதிவு.msgid_plural, வ)
                    # if 2 in பதிவு.msgstr_plural:
                    # To do for msgid with multiple entries
            except Exception as e:
                print(e)
                time.sleep(5*எண்ணிக்கை)
                எண்ணிக்கை += 1
                வ = எண்ணிக்கை%2
            if எண்ணிக்கை == 5:
                break 
        po.save(கோப்பு)
        po.save_as_mofile(கோப்பு[:-2] + 'mo')
        print("After : ",po.percent_translated(),"%")

கோப்புகள் = glob.glob('./முடிவுபெறாத/*.po')
for கோப்பு in கோப்புகள்:
    மொழிபெயர்(கோப்பு)





if __name__ == "__main__":
    அகராதி_மேம்படுத்து()
    # வரிசைபடுத்து_கோப்புகள்()
    # அ = அகராதி_திற()
    # அகராதி_சேமி(அ)    
    # அ.save()
