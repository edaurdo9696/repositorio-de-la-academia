#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 10:37:05 2019

@author: eduardo
"""


def reemplazar_ultimo_elemento_de_la_lista(unaLista, unElemento):
    b=(len(unaLista)-1)
    unaLista[b]=unElemento
    return unaLista
lista=[23,33,44]
elemto="pepe"
res=reemplazar_ultimo_elemento_de_la_lista(lista, elemto)
print (res)
    


    


