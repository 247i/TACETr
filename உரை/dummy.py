import re

# மூலம் = "%(save_profile)s %(num_contained_saves)d - English message"
# தமிழ் = " %(num_contained_saves) டி - %(தமிழ்) கள் - தமிழ் தகவல்"

test = "மொழிபெயர்ப்புகளை ஏற்றுகிறது [%கள்]".replace("%கள்", "%s")
# print(test)
test = "மொழிபெயர்ப்புகளை ஏற்றுகிறது [%கள்]".find("%s")
# print(test)
# %(save_profile) கள்
# %(save_profile)s

# %(num_contained_saves) டி
# %(num_contained_saves)d

மூலம் = "Number must be between %(min)s and %(max)s."
தமிழ் = "எண் %(நிமிடம்) கள் மற்றும் %(அதிகபட்சம்) கள் இடையே இருக்க வேண்டும்."


print (தமிழ்)
    
# regular expression based replacements - %(sometext)s
அடை_var = re.findall(r"%\([a-z_A-Z]+\)s", மூலம்)
அடை_மாறி = re.findall(r"%\([a-z_A-Zஂ-௺ ]+\) கள்", தமிழ்)
if அடை_மாறி and அடை_var:
    for மாறி, var in zip(அடை_மாறி, அடை_var):
        தமிழ் = தமிழ்.replace(மாறி, var)
print (தமிழ்)

# regular expression based replacements - %(sometext)d
அடை_var = re.findall(r"%\([a-z_A-Z]+\)d", மூலம்)
அடை_மாறி = re.findall(r"%\([a-z_A-Zஂ-௺ ]+\) டி", தமிழ்)
if அடை_மாறி and அடை_var:
    for மாறி, var in zip(அடை_மாறி,அடை_var):
        தமிழ் = தமிழ்.replace(மாறி, var)
print (தமிழ்)