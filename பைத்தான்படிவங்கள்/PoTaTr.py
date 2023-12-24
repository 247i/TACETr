import translators as ts
import polib
import time
import os
from os import listdir
from os.path import isfile, join
import glob


def lookup_ta(பதிவு, tmpo):
    பதிவு = "test"
    tmpo = polib.pofile("ta_tr_m.po")
    found=tmpo.find(பதிவு)
    if found:
        return msg
    else :
        return 
    

def to_tamil(file):
    """
    Performs the tamil translation of the given PO file and generates mo file as well with the
    same name.
    """
    po = polib.pofile(file)
    pretrans = po.percent_translated()
    if pretrans != 100:
        print(file)
        print("Before : ",pretrans,"%")
        count = 0
        
        for பதிவு in po.untranslated_entries():
            try:
                print(பதிவு.msgid)
                if not பதிவு.msgid_plural:
                    பதிவு.msgstr=ts.translate_text(பதிவு.msgid, translator='google', from_language = 'en', to_language = 'ta')
                    print(பதிவு.msgstr)
                else:
                    பதிவு.msgstr_plural[0]=ts.translate_text(பதிவு.msgid, translator='google', from_language = 'en', to_language = 'ta')
                    # if 1 in பதிவு.msgstr_plural:
                    பதிவு.msgstr_plural[1]=ts.translate_text(பதிவு.msgid_plural, translator='google', from_language = 'en', to_language = 'ta')
                    # if 2 in பதிவு.msgstr_plural:
                    # To do for msgid with multiple entries
            except Exception as e:
                print(e)
                time.sleep(5*count)
                count += 1
            if count == 5:
                break 
        po.save(file)
        po.save_as_mofile(file[:-2] + 'mo')
        print("After : ",po.percent_translated(),"%")



# Translators:
# தமிழ்நேரம்<https://TamilNeram.github.io>,2023
#


