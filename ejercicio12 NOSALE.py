#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 10:37:05 2019

@author: eduardo
"""

def dev_el_doble_si_es_par(unNumero):
    if (unNumero%2==0):
        unNumero=unNumero*2
        print(unNumero)
        return(unNumero)
    else:
        print("impar")
    return (unNumero)

Numero=3
dev_el_doble_si_es_par(Numero)
print(Numero)
        
        

    

    


