# -*- coding: utf-8 -*-
"""

"""
import os
import xml.etree.cElementTree as ET
import tapo

path = "./வெறுமை"

for filename in os.listdir(path):
    if not filename.endswith(".resx"):
        continue
    pathname = os.path.join(path, filename)
    tree = ET.parse(pathname)
    root = tree.getroot()
    try:
        for data_t in root.findall("data"):
            for value_t in data_t.findall("value"):
                s_t = value_t.text
                t_t, _ = tapo.பொருள்_பெறு(s_t)
                t_t = str(t_t).strip()
                value_t.text = t_t
                print(s_t, t_t)
                tree.write(
                    pathname + "1.xlf",
                    encoding="UTF-8",
                    xml_declaration=True,
                )
    except Exception as e:
        print(e)
