# -*- coding: utf-8 -*-
"""
Created on Sat May  8 18:40:05 2021
"""
import os
import xml.etree.cElementTree as ET
import xlrd
import xlwt
from xlwt import Workbook
from google_trans_new import google_translator  
from bs4 import BeautifulSoup
import pota

#Set the path
path = './வெறுமை'
d_ns = "urn:oasis:names:tc:xliff:document:1.2"
ns = {"":d_ns}
d_ns = ""

#Create the instance of google translator class
translator = google_translator()  

for filename in os.listdir(path):
    if not filename.endswith('.xliff'): continue
    pathname = os.path.join(path, filename)
    tree = ET.parse(pathname)
    #get the root element 
    root=tree.getroot()
    
    #Create a workbook 
    book = xlwt.Workbook(encoding="utf-8")
    sheet1 = book.add_sheet("sheet1") 
    i=0
    #Fetch the target language to translate the text
    for file_t in root.findall("file",ns):
        t_l = file_t.get('target-language')
        s_l = file_t.get('source-language')
        for body_t in file_t.findall("body",ns):
            #fetch each element within the source tag and save it in source file
            for tu_t in body_t.findall("trans-unit", ns):
                if not (tu_t.get("translate") == "no" or tu_t[1].attrib["state"]=="translated"):
                    # print(tu_t[0].text, tu_t[1].text) # s_t, t_t - works
                    s_t=tu_t[0].text
                    # t_t = translator.translate(s_t,lang_tgt=t_l,lang_src=s_l)
                    print(s_t)
                    try:
                        t_t, _ = pota.பொருள்_பெறு(s_t)
                    except Exception:
                        book.save('sourcefile.xls')
                        tree.write(pathname+'1.xlf', 'UTF-8', True, default_namespace=d_ns)
                    t_t=str(t_t).strip()
                    sheet1.write(i, 0, s_t) 
                    sheet1.write(i, 1, t_t)
                    print(t_t)
                    tu_t[1].text=t_t
                    i=i+1
            book.save('sourcefile.xls')
            tree.write(pathname+'1.xlf', 'UTF-8', True, default_namespace=d_ns)
#     #Writing to file
#     wb = Workbook()
#     sheet1 = wb.add_sheet('sheet1')
#     #Reading file
#     location = (r'sourcefile.xls')
#     wb_r = xlrd.open_workbook(location)
#     sheet = wb_r.sheet_by_index(0)
#     sheet.cell_value(0,0)
#     print('********************')
#     #for each row and column, fetch the text, translate, and save in translate file
#     for column in range(sheet.nrows):
#         for row in range(sheet.ncols):
#             value = str(sheet.cell_value(column, row))
#           #To detect any other xml tags within the source tag
#             htmltag=bool(BeautifulSoup(value, "html.parser").find())
#             if (htmltag):
#                 sheet1.write(column, row, value)
#             else:
# #                 value = translator.translate(value,lang_tgt=t_l,lang_src=s_l) 
# #                 value=str(value).strip()
# #                 sheet1.write(column, row, value)
#     wb.save(r'translate.xls')
# 
# 
#     #create a list and store all the translated text
#     translatedtext=[]
#     # opening the source excel file
#     filename ="translate.xls"
#     twb_r = xlrd.open_workbook(filename)
#     tsheet = twb_r.sheet_by_index(0)
#     tsheet.cell_value(0,0)
#     # opening the destination excel file 
#     for column in range(tsheet.nrows):
#         for row in range(tsheet.ncols):
#             value = str(tsheet.cell_value(column, row))
#             translatedtext.append(value)
# 
# 
#     #One by one store the translated text within the respective target tag and save it.
#     i=0
#     for trans in root:
#         for header in trans:
#             for body in header:
#                 for target in body:
#                     if(target.tag=='target'):
#                         target.text=(translatedtext[i])
#                         i=i+1
# 
#     with open(pathname, "wb") as fh:
#         tree.write(fh,encoding='utf-8', xml_declaration=True)
#         