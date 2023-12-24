import translators as ts
import polib
import time
from os import listdir
from os.path import isfile, join
import glob

def tr_file(கோப்பு):
    po = polib.pofile(கோப்பு)
    pretrans = po.percent_translated()
    if pretrans != 100:
        print(கோப்பு)
        print("Before : ",pretrans,"%")
        count = 0
        # for removing fuzzy entries 
        for பதிவு in po.fuzzy_entries():
            பதிவு.flags.remove("fuzzy")
        
        for பதிவு in po.untranslated_entries():
            try:
                print(பதிவு.msgid)
                if not பதிவு.msgid_plural:
                    பதிவு.msgstr=ts.translate_text(பதிவு.msgid, translator='google', from_language = 'en', to_language = 'ta')
                    print(பதிவு.msgstr)
                else:
                    பதிவு.msgstr[0]=ts.translate_text(பதிவு.msgid, translator='google', from_language = 'en', to_language = 'ta')
                    # if 1 in பதிவு.msgstr_plural:
                    பதிவு.msgstr[1]=ts.translate_text(பதிவு.msgid_plural, translator='google', from_language = 'en', to_language = 'ta')
                    # if 2 in பதிவு.msgstr_plural:
                    # To do for msgid with multiple entries
            except Exception as e:
                print(e)
                time.sleep(5*count)
                count += 1
            if count == 5:
                break 
        po.save(கோப்பு)
        po.save_as_mofile(கோப்பு[:-2] + 'mo')
        print("After : ",po.percent_translated(),"%")

files = glob.glob('./முடிவுபெறாத/*.po')
for file in files:
    tr_file(file)




# Translators:
# தமிழ்நேரம்<https://TamilNeram.github.io>,2023
#

