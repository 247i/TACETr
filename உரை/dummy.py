test = "மொழிபெயர்ப்புகளை ஏற்றுகிறது [%கள்]".replace("%கள்", "%s")
# print(test)
test = "மொழிபெயர்ப்புகளை ஏற்றுகிறது [%கள்]".find("%s")
# print(test)
# %(save_profile) கள்
# %(save_profile)s

# %(num_contained_saves) டி
# %(num_contained_saves)d

import re
ஆங்கிலம் = "%(save_profile)s - English message"
incom = re.search(r"%\([a-z_A-Z]+\)s", ஆங்கிலம்)
print(incom)

தமிழ் = "%(தமிழ்) கள் - தமிழ் தகவல்"
out = re.search(r"%\([a-z_A-Zஂ-௺ ]+\) கள்", தமிழ்)
print(out)

if out:
    # re.replace("%(save_profile) கள்", "%(save_profile)s")
    தமிழ் = தமிழ்.replace(out.match, incom.match)
    print(தமிழ்)
    print("exitcode")
    