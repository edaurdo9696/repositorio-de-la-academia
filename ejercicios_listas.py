#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 10:37:05 2019

@author: eduardo
"""



lista_de_10=[]
i=0
while i<10:
    lista_de_10.append(i+1)
    i=i+1


def numeros(lista):
    i=0
    while i<len(lista):
        j=0
        while j<i+1:
            print (lista[i])
            j=j+1
        i=i+1
        
res=numeros(lista_de_10)

    


