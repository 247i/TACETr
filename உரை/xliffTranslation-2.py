import xml.etree.ElementTree as ET


path = './வெறுமை/WackoWiki_ta.xliff'

tree=ET.ElementTree(file=path)
ns = {"":"urn:oasis:names:tc:xliff:document:1.2"}


root=tree.getroot()

for tag in root.findall('file', namespaces=ns):
    t_value = tag.get('target-language')
    s_value = tag.get('source-language')
    print(t_value)

    