<?php

namespace Ajedrez;
use phpDocumentor\Reflection\Types\Boolean;


class Tablero{

        private $tablero = array();
        private $pieza;

        public function __construct(){
            for($i=0;$i<9;$i++){
                for($j=0;$j<9;$j++){
                    $this->tablero[$i][$j] = new PiezaNull;
                }
            }
        
        }

        public function mostrar(){
            for($i=0;$i<9;$i++){
                for($j=0;$j<9;$j++){
                    
                    if($this->pieza->getName() == "caballo"){
                        $this->pieza->colocarPieza(0,1,"caballo");
                    }if($this->pieza->getName() == "peon"){
                        $this->pieza->colocarPieza(1,0,"peon");
                    }if($this->pieza->getName() == new \Ajedrez\Torre("blanco")){
                        $this->pieza->colocarPieza(0,0 , new \Ajedrez\Torre("blanco"));
                    }if($this->pieza->getName() == "alfil"){
                        $this->pieza->colocarPieza(0,2,"alfil");
                    }if($this->pieza->getName() == "reina"){
                        $this->pieza->colocarPieza(0,3,"reina");
                    }if($this->pieza->getName() == "rey"){
                        $this->pieza->colocarPieza(0,4,"rey");
                    }
                }
            }
            return $this->tablero;
        }
        public function colocarPieza($x,$y,$pieza){
            if($this->tablero[$x][$y] == new PiezaNull){
                $this->tablero[$x][$y] = $pieza;
                $this->pieza = $pieza;
                return true;
            }else{
                return false;
            }
            
        }
        public function mover($x1,$y1,$x2,$y2){
            // llamar al mover de la pieza
            if($this->tablero[$x1][$y1] == null and $this->tablero->esBlanco()){
                $this->tablero[$x1][$y1] = $this->tablero[$x2][$y2];
                
            }
        }
        public function termino(){

        }
        public function dame($x,$y){
            // devuelve la pieza
           return $this->tablero[$x][$y];
            
            
        }
    }