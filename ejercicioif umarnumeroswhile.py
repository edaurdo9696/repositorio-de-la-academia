#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 10:37:05 2019

@author: eduardo
"""

def sumar_numeros_de_la_lista(edades):
    i=0
    suma=0
    while i< len(edades):
        suma = suma+edades[i]
        i=i+1
    return suma

res=sumar_numeros_de_la_lista([22,24,44,33])
print(res)
    

    


