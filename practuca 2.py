#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sun Dec  8 17:51:53 2019

@author: eduardo
"""
"""
Manipulacion de una Lista
1.Crear Lista
2.Mostrar Lista
3.Agregar un Elemento a la Lista
4.Eliminar un Elemento de la Lista
5.Modificar un Elemento de la Lista
6.Salir
"""
def Crear():
    global lista
    lista=[]
    print ("cuantos elementos va a tener la lista?")
    n=input()
    n=int(n)
    for i in range(0,n):
        print("ingresa el elemento del indice",i)
        elemento=input()
        lista.insert(i,elemento)

def mostrar():
    print(lista)

def agregar():
     print("ingresa el elemento que desea agregar:")
     elemento=input()
     print("ingrese el indice donde desea agregarlo:")
     indice=input()
     indice=int(indice)
     longitud=len(lista)
     longitud=int(longitud)
     if(indice>longitud or indice<0):
         print("el indice debe estar entre 0 y ",longitud)
     else:
         lista.insert(indice,elemento)
         print("elemento agregado")
def eliminar():
   
     print("ingrese el indice donde desea elimar:")
     indice=input()
     indice=int(indice)
     longitud=len(lista)
     longitud=int(longitud)
     if(indice>longitud or indice<0):
         print("el indice debe estar entre 0 y ",longitud-1)
     else:
         del lista[indice]
         print("elemento eliminado")
            
            
            
            
            
            
            

Crear()
mostrar()
agregar()
mostrar()
eliminar()
mostrar()