import translators as ts
import polib
import time
import os
from os import listdir
from os.path import isfile, join
import glob

def clear_fuzzy(file, clear_tr=False):
    """
    Removes all the fuzzy flag entries in the po file and when the clear_tr is true it also removes
    the translation message as well.
    """
    po = polib.pofile(file)
    for entry in po.fuzzy_entries():
        if clear_tr:
            entry.msgstr = ''
            if entry.msgid_plural: entry.msgstr_plural[0] = ''
            if entry.msgid_plural and 1 in entry.msgstr_plural: entry.msgstr_plural[1] = ''
            if entry.msgid_plural and 2 in entry.msgstr_plural: entry.msgstr_plural[2] = ''
        entry.flags.remove('fuzzy')
    po.save()


def lookup_ta(entry, tmpo):
    entry = "test"
    tmpo = polib.pofile("ta_tr_m.po")
    found=tmpo.find(entry)
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
        
        for entry in po.untranslated_entries():
            try:
                print(entry.msgid)
                if not entry.msgid_plural:
                    entry.msgstr=ts.translate_text(entry.msgid, translator='google', from_language = 'en', to_language = 'ta')
                    print(entry.msgstr)
                else:
                    entry.msgstr_plural[0]=ts.translate_text(entry.msgid, translator='google', from_language = 'en', to_language = 'ta')
                    # if 1 in entry.msgstr_plural:
                    entry.msgstr_plural[1]=ts.translate_text(entry.msgid_plural, translator='google', from_language = 'en', to_language = 'ta')
                    # if 2 in entry.msgstr_plural:
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


