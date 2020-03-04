<?php

    namespace Ajedrez;

    class Torre implements \Interfaces\InterfacePieza{

        private $nombre = "torre";
        public function __construct($color){

        }
        public function mover($x1,$y1,$x2,$y2,$tablero){
            $pocisionActual = $tablero->dame($x1,$y1); 
            if($tablero[$x1][$y1] != $tablero[$x2][$y2]){
                $i=0;
                while($pocisionActual == $tablero[$x1][$y1]){
                    $tablero[$x1][$i];
                }
                $i++;

            }
            if($tablero[$x1][$y1] != $tablero[$x2][$y2]){
                $i=0;
                while($pocisionActual == $tablero[$x1][$y1]){
                    $tablero[$y1][$i];
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