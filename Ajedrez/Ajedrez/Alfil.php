<?php

    namespace Ajedrez;

    class Alfil implements \Interfaces\Pieza{
        private $color;
        private $nombre = "alfil";
        public function __construct($color){
            
        }
        public function mover($x1,$y1,$x2,$y2,$tablero){
                       
            
            if($y2<$y1 and $x2>$x1){
                $posicionActual = $tablero->dame($x1,$y1);
                $i=0;
                while($posicionActual != $tablero[$x2][$y2]){
                    $posicionActual = $tablero[$x2][$y2];
                }
                $i++;

            }
            if($y2>$y1 and $x2<$x1){
                $posicionActual = $tablero->dame($x1,$y1);
                $i=0;
                while($posicionActual != $tablero[$x2][$y2]){
                    $posicionActual = $tablero[$x2][$y2];
                }
                $i++;
                
            }
            if($y2<$y1 and $x2<$x1){
                $posicionActual = $tablero->dame($x1,$y1);
                $i=0;
                while($posicionActual != $tablero[$x2][$y2]){
                    $posicionActual = $tablero[$x2][$y2];
                }
                $i++;
                
            }
            if($y2<$y1 and $x2>$x1){
                $posicionActual = $tablero->dame($x1,$y1);
                $i=0;
                while($posicionActual != $tablero[$x2][$y2]){
                    $posicionActual = $tablero[$x2][$y2];
                }
                $i++;
                
            }
            return true;
        }
        public function esBlanco(){
            if($this->color == "blanco"){
                return true;
            }else{
                return false;
            }
        }
        public function getName(){
            return $this->nombre;
        }
    }