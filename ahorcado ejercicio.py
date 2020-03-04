#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Mon Dec  9 09:05:22 2019

@author: eduardo
"""

def espacios_para_la_palabra_a_adivinar(palabra):
    p=[]
    i=0
    while i<len(palabra):
        p.append("_")
        i=i+1
    return p
res=espacios("perro")
print(res)

def adivinacion_de_letra(letra):
    letras=[]
    i=0
    while i<len(palabra):
        if letras[i]==letra[i]:
            return True
        else:
            return False
