#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Thu Dec  5 22:07:42 2019

@author: eduardo
"""

def generar_mazos(n):
    mazo=[]
    k=0
    while k<(n):
        i=0
        while i<=13:
            j=0
            while j<4:
                mazo.append(i)
            
                j=j+1
            i=i+1
        k=k+1
    
    random.shuffle(mazo)
    
    return mazo

print(generar_mazos(1))

def jugar(m):
    lista=[1,2,3,4,5,6,7,8,9,10,11,12,13]
    
    i=0
    while i<=21:
        if lista[i]==21:
            Print(gano)
            
        else:
            lista
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

        