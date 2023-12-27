import os.path
import glob

files = glob.glob('.//*.po')
for file in files:
    folder,filename = os.path.split(file)
    filename = filename[16:]
    newfile = os.path.join(folder,filename)
    print(newfile)
    os.rename(file,newfile)
    