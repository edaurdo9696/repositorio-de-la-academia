#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Mon Dec  9 09:41:56 2019

@author: eduardo
"""

# =============================================================================
# import numpy as np
# =============================================================================
import numpy as np

def crear_terreno():
    t=np.repeat(" ",7*9).reshape(7 , 9)
    
    i=0
    while i <7:
        t[(i,0)]="m"
        i=i+1
    
    j=0
    while j<7:
        t[(j,8)]="m"
        j=j+1
    
    
    k=0
    while k<9:
        t[(6,k)]="m"
        k=k+1
        
    h=0
    while h<9:
        t[(0,h)]="m"
        h=h+1
    return t   
    


terreno=crear_terreno()
print(terreno)


fil=[1,2,3,3,1]
col=[3,1,1,3,2]
tipo=["A","A","A","A","L"]

for i in range(len(tipo)):
        t[fil[i],col[i]]=tipo[i]
print(t)


        
def mis_vecinos(coordCentro):
    
    x=coordCentro[0]
    y=coordCentro[1]
    prioridad=[(x-1,y-1),(x-1,y),(x-1,y+1),(x,y+1),(x+1,y+1),(x+1,y),(x+1,y-1),(x,y-1)]
    
    return prioridad




vecinos=mis_vecinos((1,3))
print(vecinos)

#    esto es el 5)


#def     
#    for i in prioridad:
#        if((i[0]!=-1) and (i[1]!=-1)):
#            adyacentes.append(i)
#        return adyacentes
#    

 

    
    