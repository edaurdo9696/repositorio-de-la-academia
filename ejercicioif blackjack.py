#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 10:37:05 2019

@author: eduardo
"""
import random

def generar_mazo(n):
    mazo=[]
    k=0
    while k < n:
        i=1
        while i<=13:
            j=0
            while j<4:
                mazo.append(i)  
                j=j+1
            i=i+1
        k=k+1    
    random.shuffle(mazo)            
    return mazo
        

def jugar(m):
    cartas=0
    i=0
    while i<len(mazo) and cartas<21:
           cartas=cartas+mazo.pop(0)
           
           i=i+1
      
    return cartas
res=jugar(mazo)
print(res)

def jugar_varios(mazo,jugadores):
   mazocartas=[]
   i=0
   while (i<jugadores):
       cartas=jugar(mazo)
       mazocartas.append(cartas)
       i=i+1
   return mazocartas
print(jugar_varios(mazo,5))
   
       
       
  

    


