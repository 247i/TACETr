import polib
import os

def அகராதி_திற(அகராதி = 'அகராதி.po'):
    if os.path.exists(அகராதி):
        பொருள் = polib.pofile(அகராதி)
    else:
        பொருள் = polib.POFile()
        பொருள்.metadata = {
            'Project-Id-Version': 'தமிழ்_அகராதி_1.0',
            'Report-Msgid-Bugs-To': 'anishprabu.t@gmail.com',
            'POT-Creation-Date': '2023-12-20 14:00+0530',
            'PO-Revision-Date': '2024-01-15 14:00+0530',
            'Last-Translator': 'தமிழ்நேரம் <https://TamilNeram.github.io>',
            'Language-Team': 'தமிழ்நேரம் <https://TamilNeram.github.io>',
            'Language': 'ta'
            'MIME-Version': '1.0',
            'Content-Type': 'text/plain; charset=utf-8',
            'Content-Transfer-Encoding': '8bit',
            'Plural-Forms': 'nplurals=2; plural=n != 1;'
        }
        பொருள்.save(அகராதி)
        பொருள்.பாதை = அகராதி
    return பொருள்

def பதிவு_செய்(பொருள், ஆங்கிலம், தமிழ், குழப்பமானது = False ):
    பதிவு = பொருள்.find(ஆங்கிலம்)
    if not பதிவு:
        if குழப்பமானது:
            பதிவு = polib.POEntry(msgid = ஆங்கிலம், msgstr = தமிழ், flags=['fuzzy'])
        else:
            பதிவு = polib.POEntry(msgid = ஆங்கிலம், msgstr = தமிழ்)
        பொருள்.append(பதிவு)
    

def கோப்பில்_சேமி(பொருள்):
    '''
    பொருளை தட்டில் சேமி.
    po - எடுத்துசெல்லதக்கபொருள் கோப்பு.
    mo - இருமபொருள் கோப்பு.
    '''
    பொருள்.save(பொருள்.பாதை)
    பொருள்.save_as_mofile(பொருள்.பாதை[:-2] + 'mo')
    
def எடுபொருள்_இருமபொருள்(எடுபொருள்):
    '''
    எடுபொருள் => இருமம் 
    po கோப்பை mo கோப்பாக சேமி
    '''
    எடுபொருள் = polib.pofile(எடுபொருள்)
    எடுபொருள்.save_as_mofile(எடுபொருள்[:-2] + 'mo')

def இருமபொருள்_எடுபொருள்(இருமம்):
    '''
    இருமம் => எடுபொருள்
    mo கோப்பை po கோப்பாக சேமி
    '''
    இருமபொருள் = polib.mofile(இருமம்)
    இருமபொருள்.save_as_pofile(இருமம்[:-2] + 'po')


def 