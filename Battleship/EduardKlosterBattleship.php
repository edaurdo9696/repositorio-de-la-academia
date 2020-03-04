<?php

class Battleship{

    private $tablero1 = array();
    private $tablero2 = array();
    private $barcos;
    private $fila;
    private $columna;
    private $contadorDeTurnos = 0;

    public function __construct($fil,$col,$bar){
            for($i=0;$i<$fil;$i=$i+1){
            $this->tablero1[$i] = array();
            $this->tablero2[$i] = array();
                for($j=0;$j<$col;$j=$j+1){
                    $this->tablero1[$i][$j] = 0;
                    $this->tablero2[$i][$j] = 0;
                }
            
            }
        $this->barcos = $bar;
        $this->fila = $fil;
        $this->columna = $col;
    }
    function mostrarTablero1(){
        return $this->tablero1;
               
    }

    function mostrarTablero2(){
        return $this->tablero2;
    }

    function colocarNaveJugador1($fila,$columna){
        if($this->tablero1[$fila][$columna]=== 0){
            $this->tablero1[$fila][$columna] = 1;

        }
        
    }
    function colocarNaveJugador2($fila,$columna){
        if($this->tablero2[$fila][$columna]=== 0){
            $this->tablero2[$fila][$columna] = 1;

        }
        
    }
    function disparoTurnoJugador1($fila, $columna){
        if($this->tablero2[$fila][$columna]=== 1){
            $this->tablero2[$fila][$columna] = 2;

        }
        $this->contadorDeTurnos = $this->contadorDeTurnos + 1;
    }
    
    function disparoTurnoJugador2($fila, $columna){
        if($this->tablero1[$fila][$columna]=== 1){
            $this->tablero1[$fila][$columna] = 2;
        }
        $this->contadorDeTurnos = $this->contadorDeTurnos + 1 ;

    }
    function ganoJugador1(){
        for($i=0;$i<$this->fila;$i=$i+1){
            for($j=0;$j<$this->columna;$j=$j+1){
                if($this->tablero2[$i][$j] === 1){
                    return False;
                }
            }
        }
        return True;

    }

    function ganoJugador2(){
        for($i=0;$i<$this->fila;$i=$i+1){
            for($j=0;$j<$this->columna;$j=$j+1){
                if($this->tablero2[$i][$j] === 1){
                    return False;
                }
            }
        }
        return True;

    }

    function terminoElJuego(){
        if($this->ganoJugador1() == True or $this->ganoJugador2() == True){
            return True;
        }

    }
    
    function CuantosTurnosPasaron(){
       return $this->contadorDeTurnos;

   
    }
   
}
