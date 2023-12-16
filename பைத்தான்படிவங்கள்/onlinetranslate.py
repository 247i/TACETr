import translators as ts
import polib

def tr_file(filename):
    po = polib.pofile(filename)
    print("Before : ",po.percent_translated(),"%")
    count = 0
    errors = ""
    try:
        for entry in po.untranslated_entries():
            try:
                entry.msgstr=ts.translate_text(entry.msgid, translator='google', from_language = 'en', to_language = 'ta')
                print(entry.msgid, entry.msgstr)
            except  Exception as e:
                errors += str(e)
                count += 1
            if count == 5:
                break 
                   
    except Exception as e:
        print("Exception has occured", e)
        
    finally :
        po.save(filename)

    # po.save_as_mofile(filename+'.mo')

    print("After : ",po.percent_translated(),"%")
    print("Error count:", count)
    print("Errors:", errors)


files = [ "appinventor-odemessages-ta.po",
          "appinventor-ai-blockly-messages-ta.po" ]

for file in files:
    tr_file(file)




# Translators:
# தமிழ்நேரம்<https://TamilNeram.github.io>,2023
#

