<?php

class Bosque{
    
    private $arreglo=array();
    private $probabilidadDeRayo;
    private $probabilidadDeBrote;

    public function __construct($longitud,$probRayo,$probBr){
      $i=0;
      while ($i<$longitud){
          $this->arreglo[]=0;
          $i=$i+1;
      }
    
      $this->probabiliadadDeRayo = $probRayo;
      $this->probabilidadDeBrote = $probBr;
    }

    function mostrar(){
        return $this->arreglo;

    }
    function rayo(){
        $rayo = (-1);
        foreach($this->arreglo as $k => $v){
            $random =random_int(0,100);
            if($this->arreglo[$k] === 1 and $random< $this->probabilidadDeRayo){
            $this->arreglo[$k]= $rayo;
        }

    }

    }
    function primavera(){
        $brote = 1;
        foreach($this->arreglo as $k => $v){
            $random =random_int(0,100);
            if($this->arreglo[$k] === 0 and $random < $this->probabilidadDeBrote){
                $this->arreglo[$k]= $brote;
            }
        }
    }

function incendios(){
    $i=0;
    while($i<count($this->arreglo)-1){
        if($this->arreglo[$i] === 1){
            $this->arreglo[$i+1] = -1;
        
        }
        $i=$i+1;
    
    }
    while($i>0){
        if($this->arreglo[$i] === 1){
            $this->arreglo[$i-1] = -1;
        }
    $i=$i-1;
    }

}
}