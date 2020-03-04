#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Dec 11 11:19:54 2019

@author: eduardo
"""
import numpy as np
import random

def crear_tablero(filas,columnas):
    
    tablero=np.repeat(0,filas*columnas).reshape(filas , columnas)
    
    i=0
    while i<columnas:
        tablero[(0,i)]=1
        i=i+1
        
    j=0
    while j<columnas:
        tablero[(filas-1,j)]=1
        j=j+1
#        
    k=0
    while k<filas:
        tablero[(k,columnas-1)]=1
        k=k+1
#        
    n=0
    while n<filas:
        tablero[(n,0)]=1
        n=n+1
#         
    return tablero
tablero=crear_tablero(22,22)



fil=[2,3,4,5,6,7,8,12,13,14,15,16,17,18,2,3,4,5,7,8,9,10,11,13,14,15,16,17,18,1,2,3,4,5,6,7,8,11,12,13,14,16,17,18,19,20,11,12,2,3,4,6,7,8,9,10,11,12,14,15,16,17,18,9,10,17,18,9,10,17,18,2,3,4,6,7,8,9,10,11,12,15,16,17,18,11,12,1,2,3,4,5,6,7,8,11,12,13,14,16,17,18,19,20,2,3,4,5,6,7,8,10,11,12,13,14,17,18,19,2,3,4,5,6,7,8,10,11,12,13,14,17,18,19,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
col=[2,2,2,2,2,2,2,2,2,2,2,2,2,2,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,7,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,9,9,9,9,10,10,10,10,11,11,11,11,11,11,11,11,11,11,11,11,11,11,12,12,13,13,13,13,13,13,13,13,13,13,13,13,13,13,13,13,13,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,17,17,17,17,17,17,17,17,17,17,17,17,17,17,17,17,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19]
tipo=["1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1"]
for i in range(len(tipo)):
    tablero[fil[i],col[i]]=tipo[i]


    
def graficar(tablero):         
    k=0
    for i in range(tablero.shape[0]):
        for j in range(tablero.shape[1]):
            if i!=k:
                print()
                k+=1
            if tablero[(i,j)]==0:
                print(chr(0x00002B1C),end="")
            if tablero[(i,j)]==1:
                print(chr(0x00002B1B),end="")
            if tablero[(i,j)]==2:
                print(chr(0x000026AB),end="")
            if tablero[(i,j)]==6:
                print(chr(0x0001F617),end="")
            if tablero[(i,j)]==7 or tablero[(i,j)]==8 or tablero[(i,j)]==9:
                print(chr(0x0001F47B),end="")
    print()
    print()   


   
def posiciones_iniciales(tablero):
    tablero[(8,9)]=6
    tablero[(14,9)]=7
    tablero[(16,9)]=8
    tablero[(15,10)]=9
    return tablero
pos=posiciones_iniciales(tablero)




def mis_vecinos(coordCentro):
    
    x=coordCentro[0]
    y=coordCentro[1]
    prioridad=[(x-1,y),(x,y+1),(x+1,y),(x,y-1)]
   
    random.shuffle(prioridad)
    return prioridad


def buscar_adyacentes(tablero,coordCentro,objetivo):
    res=[]
    for vecino in mis_vecinos(coordCentro):
        if tablero[vecino]==objetivo:
            return [vecino]
    return res
#
#
def mover_fantasma(tablero):
    n_fila = tablero.shape[0]
    n_col = tablero.shape[1]
    for i in range(1,n_fila-1):
        for j in range(1,n_col-1):
            if tablero[(i,j)] ==7 or tablero[(i,j)]==8 or tablero[(i,j)]==9:
                nuevaposicion=buscar_adyacentes(tablero,(i,j),0)
                alimento=buscar_adyacentes(tablero,(i,j),6)
                if len(nuevaposicion)!=0:
                    tablero[nuevaposicion[0]] = tablero[(i,j)]
                    tablero[(i,j)]=0
                if len(alimento)>0:
                    tablero[alimento[0]] = tablero[(i,j)]
                    tablero[(i,j)]=0
                    print("Game Over")
                    
#                    
def tableroAuxiliar(tablero):
    
    tableroAuxiliar=np.repeat(0,filas*columnas).reshape(filas , columnas)
       i=0
    while i<columnas:
        tablero[(0,i)]=1
        i=i+1
        
    j=0
    while j<columnas:
        tablero[(filas-1,j)]=1
        j=j+1
#        
    k=0
    while k<filas:
        tablero[(k,columnas-1)]=1
        k=k+1
#        
    n=0
    while n<filas:
        tablero[(n,0)]=1
        n=n+1
#         
    return tableroAuxiliar
tableroAuxiliar=crear_tablero(22,22)

def llenar_monedas(tablero):
    
fil=[1,2,3,4,5,1,1,1,3,4,5,6]
col=[1,1,1,1,1,9,10,11,20,20,20,20]
tipo=["2,","2","2","2","2","2","2","2","2","2","2","2"]
for i in range(len(tipo)):
    tablero[fil[i],col[i]]=tipo[i]

    
    
#def mover_pacman(tablero):
#    n_fila = tablero.shape[0]
#    n_col = tablero.shape[1]
#    for i in range(1,n_fila-1):
#        for j in range(1,n_col-1):
#            if tablero[(i,j)] ==6:
#                nuevaposicion=buscar_adyacentes(tablero,(i,j),0)
#                if len(nuevaposicion)!=0:
#                    tablero[nuevaposicion[0]] = tablero[(i,j)]
#                    tablero[(i,j)]=0




def evolucionar_en_el_tiempo(tablero,tiempo_limite):
    i=0
    while i<tiempo_limite:
        print("ciclo", i+1)
        mover_fantasma(tablero)
#        mover_pacman(tablero)
        i=i+1
#        
#evolucionar_en_el_tiempo(t,0)
#
#graficar(t)

def buscar_pacman(tablero):
    coordenada=[]
    n_fila = tablero.shape[0]
    n_col = tablero.shape[1]
    for i in range(1,n_fila-1):
        for j in range(1,n_col-1):
            if tablero[(i,j)] ==6:
                coordenada=(i,j)
                return coordenada
    
    
    
def  buscar_fantasma_7(tablero):
     coordenada=[]
     n_fila = tablero.shape[0]
     n_col = tablero.shape[1]
     for i in range(1,n_fila-1):
         for j in range(1,n_col-1):
             if tablero[(i,j)] ==7:
                 coordenada=(i,j)
                 return coordenada

def  buscar_fantasma_8(tablero):
     coordenada=[]
     n_fila = tablero.shape[0]
     n_col = tablero.shape[1]
     for i in range(1,n_fila-1):
         for j in range(1,n_col-1):
             if tablero[(i,j)] ==8:
                 coordenada=(i,j)
                 return coordenada             

def  buscar_fantasma_9(tablero):
     coordenada=[]
     n_fila = tablero.shape[0]
     n_col = tablero.shape[1]
     for i in range(1,n_fila-1):
         for j in range(1,n_col-1):
             if tablero[(i,j)] ==9:
                 coordenada=(i,j)
                 return coordenada           

#
#tecla
#tecla_arriba =="w"
#"w"=mis_vecinos[0]
#tecla_derecha=="d"
#"d"=mis_vecinos[1]
#tecla_abajo == "s"
#"s"= mis_vecinos[2]
#tecla_izquierda == "a"
#"a"=mis_vecinos[3]

def mover_pacman_manual(tablero,tecla):
    pacman=6
    posicion_actual=buscar_pacman(tablero)
    fila = posicion_actual[0]
    columna = posicion_actual[1]
    
    if tecla == "w" and tablero[( fila-1 , columna )] in [0, 2]:
        tablero[(fila-1,columna)]=pacman
        tablero[(fila,columna)]=0
    if tecla == "d" and tablero[(fila, columna+1)] in [0, 2]:
        tablero[(fila,columna+1)]=pacman
        tablero[(fila,columna)]=0
    if tecla == "s" and tablero[(fila+1,columna)] in [0,2]:
        tablero[(fila+1,columna)]=pacman
        tablero[(fila,columna)]=0
    if tecla =="a" and tablero[(fila,columna-1)] in [0,2]:
        tablero[(fila,columna-1)]=pacman
        tablero[(fila,columna)]=0
    



    
import sys
import select
import termios
import contextlib
from IPython.display import clear_output


@contextlib.contextmanager
def decanonize(fd):
    old_settings = termios.tcgetattr(fd)
    new_settings = old_settings[:]
    new_settings[3] &= ~termios.ICANON
    termios.tcsetattr(fd, termios.TCSAFLUSH, new_settings)
    yield
    termios.tcsetattr(fd, termios.TCSAFLUSH, old_settings)

with decanonize(sys.stdin.fileno()):
    try:
        while True:
            i,o,e = select.select([sys.stdin],[],[],1)
            if i and i[0] == sys.stdin:
                tecla = sys.stdin.read(1)
                
                
                ###########
                # la variable tecla dice que tecla presionaron
                # completar con la logica de mover el pacman y los fantasmas
                mover_pacman_manual(tablero,tecla)
                mover_fantasma(tablero)
                
                clear_output()
                
                ###########
                # Aca se imprime el tablero
                graficar(tablero)
                
    except KeyboardInterrupt:
        pass



#def test_crear_tablero():
#    
#    
#    assert crear_tablero[(0,0)] =="1"
#    assert crear_tablero[(1,1)] ==" "
#    
#test_crear_tablero()



    



