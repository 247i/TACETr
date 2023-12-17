import translators as ts
import polib
import time

def tr_file(filename):
    po = polib.pofile(filename)
    print("Before : ",po.percent_translated(),"%")
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
    # po.save_as_mofile(filename+'.mo')
    print("After : ",po.percent_translated(),"%")


files = [ "sphinx-1_sphinxcontrib-applehelp-pot_ta.po",
          "sphinx-1_sphinxcontrib-devhelp-pot_ta.po",
          "sphinx-1_sphinxcontrib-htmlhelp-pot_ta.po",
          "sphinx-1_sphinxcontrib-jsmath-pot_ta.po",
          "sphinx-1_sphinxcontrib-qthelp-pot_ta.po",
          "sphinx-1_sphinxcontrib-serializinghtml-pot_ta.po",
          ]

for file in files:
    filepath = "./முடிவுபெறாத/"+file
    print(filepath)
    tr_file(filepath)




# Translators:
# தமிழ்நேரம்<https://TamilNeram.github.io>,2023
#

