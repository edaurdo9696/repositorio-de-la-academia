#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Dec  4 20:59:13 2019

@author: eduardo
"""

import random
import numpy as np

def inicializar_album(figus_total):
    album=[]
    i=0
    while i<figus_total:
        album.append(0)
        i=i+1
    return album
res=inicializar_album(699)
print(res)