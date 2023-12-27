import xml.etree.ElementTree as ET

tree = ET.parse("rockylinux.org_ta.xliff")
root = tree.getroot()

for child in root.iter("trans-unit"):
    # sibling = child.find ("target")
    print("child",child.text)
    # print("sibling",sibling.text)