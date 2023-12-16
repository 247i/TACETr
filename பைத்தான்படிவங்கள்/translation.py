import gettext

def main():
    for language in ["ta", ]:
        language_translations = gettext.translation("base", "locales",      
languages=[language])
        language_translations.install()
        
        _ = language_translations.gettext
        print(_("Hello world"))

if __name__ == '__main__':
    main()
