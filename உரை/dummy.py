test = "மொழிபெயர்ப்புகளை ஏற்றுகிறது [%கள்]".replace("%கள்", "%s")
# print(test)
test = "மொழிபெயர்ப்புகளை ஏற்றுகிறது [%கள்]".find("%s")
# print(test)
# %(save_profile) கள்
# %(save_profile)s

# %(num_contained_saves) டி
# %(num_contained_saves)d

import re
மூலம் = "%(save_profile)s %(num_contained_saves)d - English message"
தமிழ் = " %(num_contained_saves) டி - %(தமிழ்) கள் - தமிழ் தகவல்"
print (தமிழ்)
    
# regular expression based replacements - %(sometext)s
அடை_var = re.search(r"%\([a-z_A-Z]+\)s", மூலம்)
அடை_மாறி = re.search(r"%\([a-z_A-Zஂ-௺ ]+\) கள்", தமிழ்)
if அடை_மாறி and அடை_var:
    தமிழ் = தமிழ்.replace(அடை_மாறி.group(0), அடை_var.group(0))
print (தமிழ்)

# regular expression based replacements - %(sometext)d
அடை_var = re.search(r"%\([a-z_A-Z]+\)d", மூலம்)
அடை_மாறி = re.search(r"%\([a-z_A-Zஂ-௺ ]+\) டி", தமிழ்)
if அடை_மாறி and அடை_var:
    தமிழ் = தமிழ்.replace(அடை_மாறி.group(0), அடை_var.group(0))
        
print (தமிழ்)