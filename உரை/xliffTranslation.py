import xml.etree.ElementTree as ET
import os
from google_trans_new import google_translator  

path = './வெறுமை'

ns = {"":"urn:oasis:names:tc:xliff:document:1.2"}

for filename in os.listdir(path):
    if not filename.endswith('.xliff'): continue
    pathname = os.path.join(path, filename)
    tree = ET.parse(pathname)
    root = tree.getroot()
    #Fetch the source and target language to translate the text
    for file_t in root.findall("file",ns):
        t_value = file_t.get('target-language')
        s_value = file_t.get('source-language')
        for tu_t in root.iter("trans-unit"):
            # sibling = child.find ("target")
            print("trans-unit",tu_t)
            # print("sibling",sibling.text)