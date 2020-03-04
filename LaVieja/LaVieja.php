<?php

class LaVieja{

    private $tablero = array(0=>array(0,0,0),1=>array(0,0,0),2=>array(0,0,0));

    function mostrar(){
        return $this->tablero;
    }

    function JugarX($fila,$columna){
       $this->tablero[$fila][$columna] = "x";
     
    }
    function JugarO($fila,$columna){
        $this->tablero[$fila][$columna] = "o";
    }
    function ganoX(){
        $contadorHorizontal = 0;
        $contadorVertical = 0;
        $juego = new LaVieja;
        for($i=0;$i<3;$i=$i+1){
              for($j=0;$j<3;$j=$j+1){
              if($this->tablero[$i][$j] == "x"){
                  $contadorHorizontal = $contadorHorizontal + 1;
                  $contadorVertical = $contadorVertical + 1;
              }     
              if($contadorHorizontal == 3){
                  return true;

              }
              if($contadorVertical == 3 ){
                  return true;
              }
        if($this->tablero[0][2] and $this->tablero[1][1] and $this->tablero[2][0] == "x"){
                return true;

        }
        if($this->tablero[0][0] and $this->tablero[1][1] and $this->tablero[2][2] == "x"){
                return true;    

        }
            
            }
        
                   
        }

    }

    function ganoO(){
        $contadorHorizontal = 0;
        $contadorVertical = 0;
        $juego = new LaVieja;
        for($i=0;$i<3;$i=$i+1){
            for($j=0;$j<3;$j=$j+1){
              if($this->tablero[$i][$j] == "o"){
                  $contadorHorizontal = $contadorHorizontal + 1;
                  $contadorVertical = $contadorVertical + 1;
                }     
              if($contadorHorizontal == 3){
                return true;

                }
              if($contadorVertical == 3 ){
                return true;
                }
              if($this->tablero[0][2] and $this->tablero[1][1] and $this->tablero[2][0] == "o"){
                return true;

                }
              if($this->tablero[0][0] and $this->tablero[1][1] and $this->tablero[2][2] == "o"){
                return true;    

                }
            
            
             
            }
        
                   
        }

    }

    function empate(){
        if(!ganoX() and !ganoO()){
            return true;

        }

    

    }




}
    
