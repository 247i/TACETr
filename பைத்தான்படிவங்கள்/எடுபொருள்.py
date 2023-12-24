import polib
import os
import glob

def அகராதி_திற(அகராதி = './நினைவு/அகராதி.po'):
    if os.path.exists(அகராதி):
        பொருள் = polib.pofile(அகராதி)
    else:
        பொருள் = polib.POFile()
        பொருள்.metadata = {
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
        }
        பொருள்.save(அகராதி)
    return பொருள்

def பதிவு_செய்(பொருள், ஆங்கிலம், தமிழ், குழப்பமானது = False ):
    பதிவு = பொருள்.find(ஆங்கிலம்)
    if (not பதிவு) or (பதிவு.msgstr == பதிவு.msgid):
        if குழப்பமானது:
            பதிவு = polib.POEntry(msgid = ஆங்கிலம், msgstr = தமிழ், flags=['fuzzy'])
        else:
            பதிவு = polib.POEntry(msgid = ஆங்கிலம், msgstr = தமிழ்)
        பொருள்.append(பதிவு)
    else:
        if பதிவு.msgstr == தமிழ்:
            pass
        else :
            print( ஆங்கிலம்)
            print( பதிவு.msgstr, தமிழ்)

def அகராதி_சேமி(பொருள், இருமம் = False ):
    '''
    பொருளை தட்டில் சேமி.
    po - எடுத்துசெல்லதக்கபொருள் கோப்பு.
    mo - இருமபொருள் கோப்பு.
    '''
    பொருள்.save()
    if இருமம்:
        பொருள்.save_as_mofile(பொருள்.பாதை[:-2] + 'mo')
    
def அகராதி_இருமபொருள்(பாதை):
    '''
    எடுபொருள் => இருமம் 
    po கோப்பை mo கோப்பாக சேமி
    பாதை -> எடுபொருள் கோப்பு பாதை
    '''
    எடுபொருள் = polib.pofile(பாதை)
    எடுபொருள்.save_as_mofile(எடுபொருள்[:-2] + 'mo')

def அகராதி_எடுபொருள்(பாதை):
    '''
    இருமம் => எடுபொருள்
    mo கோப்பை po கோப்பாக சேமி
    பாதை -> இரும்கோப்பு பாதை
    '''
    இருமபொருள் = polib.mofile(பாதை)
    இருமபொருள்.save_as_pofile(இருமம்[:-2] + 'po')

def வரிசைபடுத்து(அகராதி = './நினைவு/அகராதி.po'):
    அ = அகராதி_திற(அகராதி)
    அ.sort()
    அகராதி_சேமி(அ)

def sortpofiles(பாதை = './மொழிபெயர்ப்புகள்/*.po' ):
    files = glob.glob(பாதை)
    for file in files:
        வரிசைபடுத்து(file)

def buildmemory(பாதை = './மொழிபெயர்ப்புகள்/*.po'):
    அ = அகராதி_திற()
    files = glob.glob(பாதை)
    for file in files:
        ஆ = அகராதி_திற(file)
        for பதிவி in ஆ.translated_entries():
            பதிவு_செய்(அ, பதிவி.msgid, பதிவி.msgstr)
        for பதிவி in ஆ.fuzzy_entries():
            பதிவு_செய்(அ, பதிவி.msgid, பதிவி.msgstr, True)
    அகராதி_சேமி(அ)
    
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
    
if __name__ == "__main__":
    # buildmemory()
    # sortpofiles()
    அ = அகராதி_திற()
    # அகராதி_சேமி(அ)    
    அ.save()
