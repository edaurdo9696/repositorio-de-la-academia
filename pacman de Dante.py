#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Thu Dec 12 11:01:38 2019

@author: eduardo
"""

###PACMAAAANNN###
 
#Para cada funcion que creemos vamos a crear un test que la pruebe
 
import numpy as np
import random as rn
import time
 
def mis_vecinos(coord_centro):
    arriba = (coord_centro[0]-1,coord_centro[1])
    derecha = (coord_centro[0],coord_centro[1]+1)
    abajo = (coord_centro[0]+1,coord_centro[1])
    izquierda = (coord_centro[0],coord_centro[1]-1)
    coordenadas_vecinas = [arriba,abajo,izquierda,derecha]
    return coordenadas_vecinas
 
 
def crear_tablero(filas,columnas):
    tablero = (np.repeat(0,(filas+2)*(columnas+2))).reshape(filas+2,columnas+2)
    n_filas = tablero.shape[0]
    n_columnas = tablero.shape[1]
    for fila in range(0,n_filas):
        tablero[(fila,0)] = 1
        tablero[(fila,n_columnas-1)] = 1
    for columna in range(0,n_columnas):
        tablero[(0,columna)] = 1
        tablero[(n_filas-1,columna)] = 1
    return tablero
 
def contar(tablero,numero):
    n_fila = tablero.shape[0]
    n_columna = tablero.shape[1]
    contador = 0
    for i in range(1,n_fila-1):
        for j in range(1,n_columna-1):
            coordenada_actual = (i,j)
            if tablero[coordenada_actual] == numero:
                contador = contador + 1
    return contador
 
def rellenar_tablero(tablero):
    n_filas = tablero.shape[0]
    n_columnas = tablero.shape[1]
    for columna in range(2,int((n_columnas-1)/2)):
        tablero[(2,columna)] = 1
    for columna in range(int((n_columnas-1)/2)+2,n_columnas-2):
        tablero[(2,columna)] = 1
    for columna in range(2,int((n_columnas-1)/2)):
        tablero[(n_filas-3,columna)] = 1
    for columna in range(int((n_columnas-1)/2)+2,n_columnas-2):
        tablero[(n_filas-3,columna)] = 1
    for columna in range(1,n_columnas-2):
        tablero[(4,columna)] = 1
    for columna in range(2,n_columnas-1):
        tablero[(n_filas-5,columna)] = 1
    for fila in range(5,6):
        tablero[(fila,3)] = 1
        tablero[(fila,8)] = 1
    for fila in range(7,n_filas-5):
        tablero[(fila,3)] = 1
        tablero[(fila,8)] = 1
    for fila in range(5,16):
        tablero[(fila,13)] = 1
    for fila in range(9,13):
        for columna in range(16,21):
            tablero[(fila,columna)] = 1
 
def buscar_adyacente(tablero,coord_centro,objetivo):
    adyacente = []
    vecinos = mis_vecinos(coord_centro)
    for coordenada in vecinos:
        if tablero[coordenada] == objetivo:
            adyacente.append(coordenada)
            return adyacente
    return adyacente
 
def posiciones_iniciales(tablero):
    pacman = 6
    septo = 7
    octo = 8
    nona = 9
    tablero[(15,18)] = pacman
    tablero[(13,5)] = septo
    tablero[(14,5)] = octo
    tablero[(15,5)] = nona
   
def buscar_pacman(tablero):
    filas = tablero.shape[0]
    columnas = tablero.shape[1]
    pacman = 6
    for i in range(0,filas-1):
        for j in range(0,columnas-1):
            coordenada_actual = (i,j)
            if tablero[coordenada_actual] == pacman:
                return coordenada_actual
 
def buscar_fantasmas(tablero):
    septo = 7
    octo = 8
    nona = 9
    posiciones = []
    filas = tablero.shape[0]
    columnas = tablero.shape[1]
    for i in range(1,filas-2):
        for j in range(1,columnas-2):
            coordenada_actual = (i,j)
            if len(posiciones) == 0 and tablero[coordenada_actual] == septo:
                posiciones.append(coordenada_actual)
            if len(posiciones) == 1 and tablero[coordenada_actual] == octo:
                posiciones.append(coordenada_actual)
            if len(posiciones) == 2 and tablero[coordenada_actual] == nona:
                posiciones.append(coordenada_actual)
    return posiciones
 
def mover_pacman(tablero,direccion, meme=0):
    pacman = 6
    posicion_actual = buscar_pacman(tablero)
    vecinos = mis_vecinos(posicion_actual)
    if direccion == 'W' and tablero[vecinos[0]] != 1:
        if tablero[vecinos[0]] == 7 or tablero[vecinos[0]] == 8 or tablero[vecinos[0]] == 9:
            tablero[posicion_actual] = 0
            return 'GAME OVER'
        else:
            tablero[posicion_actual] = 0
            x = posicion_actual[0] - 1
            y = posicion_actual[1]
            tablero[(x,y)] = pacman
    elif direccion == 'S' and tablero[vecinos[1]] != 1:
        if tablero[vecinos[1]] == 7 or tablero[vecinos[1]] == 8 or tablero[vecinos[1]] == 9:
            tablero[posicion_actual] = 0
            return 'GAME OVER'
        else:
            tablero[posicion_actual] = 0
            x = posicion_actual[0] + 1
            y = posicion_actual[1]
            tablero[(x,y)] = pacman
    elif direccion == 'A' and tablero[vecinos[2]] != 1:
        if tablero[vecinos[2]] == 7 or tablero[vecinos[2]] == 8 or tablero[vecinos[2]] == 9:
            tablero[posicion_actual] = 0
            return 'GAME OVER'
        else:
            tablero[posicion_actual] = 0
            x = posicion_actual[0]
            y = posicion_actual[1] - 1
            tablero[(x,y)] = pacman
    elif direccion == 'D' and tablero[vecinos[3]] != 1:
        if tablero[vecinos[3]] == 7 or tablero[vecinos[3]] == 8 or tablero[vecinos[3]] == 9:
            tablero[posicion_actual] = 0
            return 'GAME OVER'
        else:
            tablero[posicion_actual] = 0
            x = posicion_actual[0]
            y = posicion_actual[1] + 1
            tablero[(x,y)] = pacman
 
def mover_septo(tablero):
    septo = 7
    coordenada_pacman = buscar_pacman(tablero)
    posicion_actual = buscar_fantasmas(tablero)[0]
    vecinos = mis_vecinos(posicion_actual)
    dist_x = posicion_actual[0]-coordenada_pacman[0]
    dist_y = posicion_actual[1]-coordenada_pacman[1]
    if abs(dist_x) > abs(dist_y):
        if dist_x < 0 and tablero[vecinos[1]] != 1:
            tablero[posicion_actual] = 0
            x = posicion_actual[0] + 1
            y = posicion_actual[1]  
            tablero[(x,y)] = septo
        if dist_x < 0 and tablero[vecinos[1]] == 6:
            tablero[posicion_actual] = 0
            x = posicion_actual[0] + 1
            y = posicion_actual[1]  
            tablero[(x,y)] = septo
            return 'GAME OVER'
        if dist_x > 0 and tablero[vecinos[0]] != 1:
            tablero[posicion_actual] = 0
            x = posicion_actual[0] - 1
            y = posicion_actual[1]  
            tablero[(x,y)] = septo
        if dist_x > 0 and tablero[vecinos[0]] == 6:
            tablero[posicion_actual] = 0
            x = posicion_actual[0] - 1
            y = posicion_actual[1]  
            tablero[(x,y)] = septo
            return 'GAME OVER'
    if abs(dist_x) < abs(dist_y):
        if dist_y < 0 and tablero[vecinos[3]] != 1:
            tablero[posicion_actual] = 0
            x = posicion_actual[0]
            y = posicion_actual[1] + 1  
            tablero[(x,y)] = septo
        if dist_y < 0 and tablero[vecinos[3]] == 6:
            tablero[posicion_actual] = 0
            x = posicion_actual[0]
            y = posicion_actual[1] + 1  
            tablero[(x,y)] = septo
            return 'GAME OVER'
        if dist_y > 0 and tablero[vecinos[2]] != 1:
            tablero[posicion_actual] = 0
            x = posicion_actual[0]
            y = posicion_actual[1] - 1
            tablero[(x,y)] = septo
        if dist_y > 0 and tablero[vecinos[2]] == 6:
            tablero[posicion_actual] = 0
            x = posicion_actual[0]
            y = posicion_actual[1] - 1
            tablero[(x,y)] = septo
            return 'GAME OVER'
 
def mover_fantasmas(tablero):
    mover_septo(tablero)      
 
 
def graficar(tablero):
    for i in range(tablero.shape[0]):
        for j in range(tablero.shape[1]):
            if tablero[(i,j)] == 0:
                print(chr(0x00002003),end=" ")
            if tablero[(i,j)]==1:
                print(chr(0x00002B1B),end=" ")
            if tablero[(i,j)]==2:
                print(chr(0x000026AB),end=" ")
            if tablero[(i,j)]==6:
                print(chr(0x0001F617),end=" ")
            if tablero[(i,j)]==7 or tablero[(i,j)]==8 or tablero[(i,j)]==9:
                print(chr(0x0001F47B),end=" ")
        print()
    print()
 
def jugar():
    tablero = crear_tablero(20, 20)
    rellenar_tablero(tablero)
    posiciones_iniciales(tablero)
    wasd = ['S','S','A','A','A','A','A','A','A','A','W','W','W','W','W','W','W','W','W','W','W','A','A','A','A','S','A','A','S']
    i = 0
    while i < len(wasd):
        time.sleep(0.3)
        graficar(tablero)
        mover_pacman(tablero, wasd[i])
        time.sleep(0.3)
        graficar(tablero)
        if mover_pacman(tablero, wasd[i]) != None:
            return 'GAME OVER'
        mover_fantasmas(tablero)
        time.sleep(0.3)
        graficar(tablero)
        if mover_fantasmas(tablero) != None:
            return 'GAME OVER'
        i = i + 1
 
#%%
   
def test_mis_vecinos():
    c = (1,1)
    vecinos = mis_vecinos(c)
    coordenadas_esperadas = [(0,1),(1,2),(2,1),(1,0)]
    assert len(vecinos) == 4
    for coordenada in coordenadas_esperadas:
        assert coordenada in vecinos
 
test_mis_vecinos()
 
def test_crear_tablero():
    filas = 15
    columnas = 10
    tablero = crear_tablero(filas, columnas)
    assert tablero.shape[0] == filas + 2
    assert tablero.shape[1] == columnas + 2
    for fila in range(0,filas+2):
        assert tablero[(fila,0)] == 1
        assert tablero[(fila,columnas+1)] == 1
    for columna in range(0,columnas+2):
        assert tablero[(0,columna)] == 1
        assert tablero[(filas+1,columna)] == 1
    for fila in range(1,filas+1):
        for columna in range(1,columnas+1):
            c = (fila,columna)
            assert tablero[(c)] == 0
 
test_crear_tablero()
 
def test_contar():
    tablero = np.repeat(1,16).reshape(4,4)
    tablero[(1,1)] = 0
    valor_esperado = 3
    assert contar(tablero, 1) == valor_esperado
 
test_contar()
 
def test_rellenar_tablero():
    tablero = crear_tablero(20,20)
    n_filas = tablero.shape[0]
    n_columnas = tablero.shape[1]
    cant_0 = contar(tablero, 0)
    cant_1 = contar(tablero, 1)
    rellenar_tablero(tablero)
    for columna in range(2,int((n_columnas-1)/2)):
        assert tablero[(2,columna)] == 1
    for columna in range(int((n_columnas-1)/2)+2,n_columnas-2):
        assert tablero[(2,columna)] == 1
    for columna in range(2,int((n_columnas-1)/2)):
        assert tablero[(n_filas-3,columna)] == 1
    for columna in range(int((n_columnas-1)/2)+2,n_columnas-2):
        assert tablero[(n_filas-3,columna)] == 1
    for columna in range(1,n_columnas-2):
        assert tablero[(4,columna)] == 1
    for columna in range(2,n_columnas-1):
        assert tablero[(n_filas-5,columna)] == 1
    for fila in range(5,6):
        assert tablero[(fila,3)] == 1
        assert tablero[(fila,8)] == 1
    for fila in range(7,n_filas-5):
        assert tablero[(fila,3)] == 1
        assert tablero[(fila,8)] == 1
    for fila in range(5,16):
        assert tablero[(fila,13)] == 1
    for fila in range(9,13):
        for columna in range(16,21):
            assert tablero[(fila,columna)] == 1
    assert cant_0 == (n_filas-2)*(n_columnas-2) - cant_1
 
test_rellenar_tablero()
 
def test_buscar_adyacente():
    prueba0 = np.repeat(0,9).reshape(3,3)
    prueba0[(0,1)] = 1
    coordenada_esperada0 = [(0,1)]
    assert buscar_adyacente(prueba0, (1,1), 1) == coordenada_esperada0
    prueba1 = np.repeat(0,9).reshape(3,3)
    coordenada_esperada1 = []
    assert buscar_adyacente(prueba1, (1,1), 1) == coordenada_esperada1
 
test_buscar_adyacente()
 
def test_posiciones_iniciales():
    tablero = crear_tablero(20, 20)
    rellenar_tablero(tablero)
    posiciones_iniciales(tablero)
    pacman = 6
    septo = 7
    octo = 8
    nona = 9
    assert tablero[(15,18)] == pacman
    assert tablero[(13,5)] == septo
    assert tablero[(14,5)] == octo
    assert tablero[(15,5)] == nona
 
test_posiciones_iniciales()
 
def test_buscar_pacman():
    tablero = crear_tablero(20, 20)
    rellenar_tablero(tablero)
    posiciones_iniciales(tablero)
    posicion_esperada = (15,18)
    assert buscar_pacman(tablero) == posicion_esperada
 
test_buscar_pacman()
   
def test_buscar_fantasmas():
    tablero = crear_tablero(20, 20)
    rellenar_tablero(tablero)
    posiciones_iniciales(tablero)
    coordenadas = buscar_fantasmas(tablero)
    assert coordenadas == [(13,5),(14,5),(15,5)]
 
test_buscar_fantasmas()
   
def test_mover_pacman():
    tablero = crear_tablero(20, 20)
    rellenar_tablero(tablero)
    posiciones_iniciales(tablero)
    mover_pacman(tablero, 'W')
    mover_pacman(tablero, 'W')    
    mover_pacman(tablero, 'W')
    pos_esperada = (13,18)
    pos = buscar_pacman(tablero)
    assert pos == pos_esperada
 
test_mover_pacman()