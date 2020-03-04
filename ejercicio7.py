#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 10:37:05 2019

@author: eduardo
"""


def agregar_nombre_al_final_de_la_lista(unNombre):
    lista=["casa",5,"A"]
    lista.append(unNombre)
    return lista


elemento="edu"
lista=agregar_nombre_al_final_de_la_lista(elemento)
print(lista)

    


