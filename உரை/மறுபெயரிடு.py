import os.path
import glob

files = glob.glob('./தானி/openteacher/*.po')
for file in files:
    folder, filename = os.path.split(file)
    # filename = filename[24:]
    filename = filename.replace("translations_org.", "", -1)
    newfile = os.path.join(folder, filename)
    print(newfile)
    os.rename(file, newfile)
    