"""
எடுபொருள் கோப்புகள்
"""

import os
import re
import glob
import tapo


class அகராதிஏற்று:
    def __init__(ஐ, பாதை):
        ஐ.பாதை = பாதை
        ஐ.podata = tapo.அகராதி_மேம்படுத்து()
