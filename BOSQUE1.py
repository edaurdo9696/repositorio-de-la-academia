# -*- coding: utf-8 -*-
"""
Editor de Spyder

Este es un archivo temporal
"""


# =============================================================================
# Bosque en un año etapas en un año:
# 1)primavera: (p) probabilidad brotar arboles
# 2)caida de rayos:(f) probabilidad de rayos
# a los que le cae--- se incendian
# 3)incendios: arbol incendiado propaga fuego al de izquiera y derecha
# 4)limpieza:los arboles incendiados los quitamos del bosque
# 
# vacio =0
# arbol= 1
# arbol inceniado=-1
# bosque como una lista
# =============================================================================

import random

def generar_bosque_vacio(n):
     bosque=[]
     i=0
     
     while i<n:
         bosque.append(0)
         
         i=i+1
     return bosque
res=generar_bosque_vacio(52)
print(res)

bosque_vacio=[0,0,0,0,0,0,0,0,0]
bosque_limpio=[0,1,0,1,1,1,1,0,1]
bosque_quemado=[1,-1,-1,1,0,-1,1,0,1]

def suceso_aleatorio(prob):
    res= random.random()
    if res<prob:
        return True
    else:
       
        return False
prob=suceso_aleatorio(0.7)
print(prob)

def brotes(n, p):
    bosq=generar_bosque_vacio(n)
    i=0
    while i<n:
        if suceso_aleatorio(p)==True and bosq[i]==0:
            bosq[i]=1
        
        i=i+1
        
    return bosq
re=brotes(100,0.6)
print(re)

def cuantos(bosque,tipo_celda):
    count=bosque.count(tipo_celda)
    
                  
    return count
print(cuantos(re,1))
        
# =============================================================================
# def rayo_aleatorio(f):
#     rayo=random.random()
#         if rayo<f:
#             return True
#         else:
#             return False
# f=rayo_aleatorio(0.7)
# print(f)
# =============================================================================

def rayos(bosque, f):
    i=0
    while i<len(bosque):
        if suceso_aleatorio(f)==True and bosque[i]==1:
            bosque[i]=-1
            
        i=i+1
    return bosque
ry=rayos(re,0.6)
print(ry)

def propagacion(bosque):
    
    i=0
    while i<len(bosque)-1:
         if bosque[i]==-1 and bosque[i-1]==1:
            bosque[i-1]=-1
         
         
         
         if bosque[i]==-1 and bosque[i+1]==1:
            bosque[i+1]=-1
         i=i+1
    
    while i>0:
         if bosque[i]==-1 and bosque[i-1]==1:
            bosque[i-1]=-1
         
         
         
         if bosque[i]==-1 and bosque[i+1]==1:
            bosque[i+1]=-1
         i=i-1
        
    return bosque




red=propagacion([1,1,1,-1,0,0,0,-1,1,0])
print(red)

        
def limpieza(bosque):
   
    i=0
    while i<len(bosque):
         if bosque[i]==-1:
            bosque[i]=0
         
                          
         if bosque[i]==1:
            bosque[i]=0 
            
            
         i=i+1
    
    return bosque

ret=limpieza([1,1,1,-1,0,0,0,-1,1,0])
print(ret)


    
        
    
    
    
    










