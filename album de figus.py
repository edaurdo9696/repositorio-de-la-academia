#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Thu Dec  5 12:19:59 2019

@author: eduardo
"""

import random
 
# =============================================================================
# album = [0,0,0,0,0,0,0,0,0,0]
# figuritas_sacadas=0
# 
# while 0 in album:
#     figurita = random.randint(0,9)
#     album[figurita] = 1
#     
#     
#     figuritas_sacadas = figuritas_sacadas + 1
# =============================================================================

def inicializar_album(figus_total):
    album=[]
    i=0
    while i<figus_total:
        album.append(0)
        i=i+1
    return album
 
 
def comprar_una_figu(figus_total):
    return random.randint(0, figus_total-1)
 
def esta_lleno(album):
    return not (0 in album)
 
def cuantas_figus(figus_total):
    album = []
    i = 0
    while i < figus_total:
        album.append(0)
        i=i+1
    contador = 0
    while not(esta_lleno(album)):
        figu = comprar_una_figu(figus_total)
        album[figu] = 1
        contador = contador + 1
       
    return contador
 
res = cuantas_figus(6)
print("Necesitamos", res, "figus para completar")

def calculo_n(repeticiones):
    
    totales=[]
    i=0
    while i < repeticiones:
        contador=cuantas_figus(600)
        totales.append(contador)
        
        i=i+1
    promedio=np.mean(totales)
    return promedio
print(calculo_n(100))

def generar_paquete(figus_total,figus_paquete):
    paquete=inicializar_album(figus_total)
    i=0
    while i< figus_paquete:
         valor=random.randint(0,figus_total-1)
         paquete[valor]=paquete[valor]+1
         
         i=i+1
         
    return paquete
print(generar_paquete(10,4))

def cuantos_paquetes(figus_total,figus_paquete):
    album = []
    i = 0
    while i < figus_total:
        album.append(0)
        i=i+1
    contador = 0
    while not(esta_lleno(album)):
        paquete = generar_paquete(figus_total,figus_paquete)
        j=0
        while j<figus_total:
            album[j]=album[j]+paquete[j]
            j=j+1
        contador = contador + 1
       
    return contador
print(cuantos_paquetes(15,3))
print(album)
    

        
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
