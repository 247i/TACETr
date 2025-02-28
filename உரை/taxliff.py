# -*- coding: utf-8 -*-
"""
Created on Sat May  8 18:40:05 2021
"""
import os
import xml.etree.cElementTree as ET
import tapo

path = "./வெறுமை"
d_ns = "urn:oasis:names:tc:xliff:document:1.2"
ns = {"": d_ns}
d_ns = ""

for filename in os.listdir(path):
    if not filename.endswith(".xliff"):
        continue
    pathname = os.path.join(path, filename)
    tree = ET.parse(pathname)
    root = tree.getroot()
    try:
        for file_t in root.findall("file", ns):
            t_l = file_t.get("target-language")
            s_l = file_t.get("source-language")
            for body_t in file_t.findall("body", ns):
                for tu_t in body_t.findall("trans-unit", ns):
                    if not (
                        tu_t.get("translate") == "no"
                        or tu_t[1].attrib["state"] == "translated"
                    ):
                        s_t = tu_t[0].text
                        t_t, _ = tapo.பொருள்_பெறு(s_t)
                        t_t = str(t_t).strip()
                        tu_t[1].text = t_t
                        print(s_t, t_t)
                        tree.write(
                            pathname + "1.xlf",
                            encoding="UTF-8",
                            xml_declaration=True,
                            default_namespace=d_ns,
                        )
    except Exception as e:
        print(e)
