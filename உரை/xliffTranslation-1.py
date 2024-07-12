#!/usr/bin/env python3
#

import sys
import os

from lxml import etree

if len(sys.argv) < 2:
    print('Wrong number of arguments:\n => You need to provide a filename for processing!')
    exit()

file = sys.argv[1]

tree = etree.parse(file)
root = tree.getroot()

print("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n<!DOCTYPE tmx SYSTEM \"tmx14.dtd\">\n<tmx version=\"1.4\">")
print("\n<header srclang=\"en\" creationtool=\"XLIFF to TMX\" datatype=\"unknown\" adminlang=\"en\" segtype=\"sentence\" creationtoolversion=\"1.0\">")
print("</header>\n<body>")

for element in root:
    FileOrigin = (os.path.basename(element.attrib['origin']))
    Product = element.attrib['product']
    Source = element.attrib['source-language']
    Target =  element.attrib['target-language']
    # now the children
    for all_tags in element.findall('.//'):
        if all_tags.tag == "source":
            # replacing some troublesome and unnecessary codes
            srctxt = all_tags.text
            srctxt = srctxt.replace('^n', ' ')
            srctxt = srctxt.replace('^b', ' ')
            print("<tu>")
            print("\t<prop type=\"FileSource\">" + FileOrigin + "</prop>")
            print("\t<tuv xml:lang=\"" + Source + "\">")
            print("\t\t<seg>" + srctxt + "</seg>")
        elif all_tags.tag == "target":
            # replacing the same troublesome and unnecessary codes
            targtxt = all_tags.text
            targtxt = targtxt.replace('^n', ' ')
            targtxt = targtxt.replace('^b', ' ')
            print("\t<tuv xml:lang=\"" + Target + "\">")
            print("\t\t<seg>" + targtxt + "</seg>")
        elif all_tags.tag == "note":
            if all_tags.text is not None:
                print("\t\t<prop type=\"Note\">" + all_tags.text.replace('^n', ' ') + "</prop>")
                print("</tu>")
            else: 
                print("</tu>")
        else:
            next
print("</body>\n</tmx>")