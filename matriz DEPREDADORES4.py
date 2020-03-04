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

#def crear_terreno():
#    t=np.repeat(" ",7*9).reshape(7 , 9)
#    
#    i=0
#    while i <7:
#        t[(i,0)]="m"
#        i=i+1
#    
#    j=0
#    while j<7:
#        t[(j,8)]="m"
#        j=j+1
#    
#    
#    k=0
#    while k<9:
#        t[(6,k)]="m"
#        k=k+1
#        
#    h=0
#    while h<9:
#        t[(0,h)]="m"
#        h=h+1
#    return t   
#    
#
#t=crear_terreno()
#
#
#
#fil=[1,2,3,3,1]
#col=[3,1,1,3,2]
#tipo=["A","A","A","A","L"]
#
#for i in range(len(tipo)):
#        t[fil[i],col[i]]=tipo[i]
#print(t)
#
#
#        
#def mis_vecinos(coordCentro):
#    
#    x=coordCentro[0]
#    y=coordCentro[1]
#    prioridad=[(x-1,y-1),(x-1,y),(x-1,y+1),(x,y+1),(x+1,y+1),(x+1,y),(x+1,y-1),(x,y-1)]
#    
#    return prioridad
#
#
#
#
#vecinos=mis_vecinos((1,1))
#print(vecinos)
#
#
#def buscar_adyacentes(tablero,coordCentro,objetivo):
#    res=[]
#    for vecino in mis_vecinos(coordCentro):
#        if tablero[vecino]==objetivo:
#            return [vecino]
#    return res
#        
#resultado=buscar_adyacentes(t,(1,1),"L")
#print(resultado)
#
#
##n_fila = t.shape[0]
##n_col = t.shape[1]
##for i in range(1,n_fila-1):
##    for j in range(1,n_col-1):
#
#
#    
#        
#def fase_mover(tablero):
#    n_fila = tablero.shape[0]
#    n_col = tablero.shape[1]
#    for i in range(1,n_fila-1):
#        for j in range(1,n_col-1):
#            if tablero[(i,j)] !=" ":
#                nuevaposicion=buscar_adyacentes(tablero,(i,j)," ")
#                if len(nuevaposicion)!=0:
#                    tablero[nuevaposicion[0]] = tablero[(i,j)]
#                    tablero[(i,j)]=" "
#
#
#
#                    
#print(t)  
#fase_mover(t)
#print(t)
#
#def fase_alimentacion(tablero):
#    L="L"
#    A="A"
#    vacio=" "
#    n_fila = tablero.shape[0]
#    n_col = tablero.shape[1]
#    for i in range(1,n_fila-1):
#        for j in range(1,n_col-1):
#            if tablero[(i,j)]=="L":
#                alimento=buscar_adyacentes(tablero,(i,j),"A")
#                if len(alimento)>0:
#                    tablero[alimento[0]] = tablero[(i,j)]
#                    tablero[(i,j)]=" "
#                    print(tablero)
#                    
##fase_alimentacion(t)
#
#def fase_reproduccion(tablero):
#   
#    
#    n_fila = tablero.shape[0]
#    n_col = tablero.shape[1]
#    for i in range(1,n_fila-1):
#        for j in range(1,n_col-1):
#            if tablero[(i,j)]=="A":
#                pareja=buscar_adyacentes(tablero,(i,j),"A")
#                if len(pareja)>0:
#                    cria=buscar_adyacentes(tablero,(i,j)," ")
#                    if len(cria)>0:
#                        tablero[cria[0]]="A"
#    print(tablero)
#
#fase_reproduccion(t)
#
#def evolucionar(tablero):
#    fase_mover(tablero)
#    fase_alimentacion(tablero)
#    fase_reproduccion(tablero)
#    
#    
#def evolucionar_en_el_tiempo(tablero,tiempo_limite):
#    i=0
#    while i<tiempo_limite:
#        evolucionar(tablero)
#        i=i+1
#     
def nuevo_terreno():
    t=np.repeat(" ",6*8).reshape(6 , 8)
    
    i=0
    while i<6:
        t[(i,0)]="m"
        i=i+1
        
    j=0
    while j<6:
        t[(j,7)]="m"
        j=j+1
        
    k=0
    while k<8:
        t[(5,k)]="m"
        k=k+1
        
    n=0
    while n<8:
        t[(0,n)]="m"
        n=n+1
#        
    return t

t=nuevo_terreno()
print(t)

    

    
    
    

            
#print(t)
#t=nuevo_terreno()  
#                 
    
                
                
             
                
                
    

    

 

    
    