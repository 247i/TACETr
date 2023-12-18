import translators as ts
import polib
import time
from os import listdir
from os.path import isfile, join
import glob

def tr_file(filename):
    po = polib.pofile(filename)
    pretrans = po.percent_translated()
    if pretrans != 100:
        print(filename)
        print("Before : ",pretrans,"%")
        count = 0
        for entry in po.untranslated_entries():
            try:
                print(entry.msgid)
                entry.msgstr=ts.translate_text(entry.msgid, translator='google', from_language = 'en', to_language = 'ta')
                print(entry.msgstr)
            except Exception as e:
                print(e)
                time.sleep(5*count)
                count += 1
            if count == 5:
                break 
        po.save(filename)
        po.save_as_mofile(filename[:-2] + 'mo')
        print("After : ",po.percent_translated(),"%")

files = glob.glob('./முடிவுபெறாத/*.po')
for file in files:
    tr_file(file)




# Translators:
# தமிழ்நேரம்<https://TamilNeram.github.io>,2023
#

