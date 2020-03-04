<?php

class Ahorcado{

    private $palabra;
    private $vidas;
    private $palabraParcial;

    public function __construct($p,$v){
        $this->palabra=$p;
        $this->vidas=$v;
        for ($i=0;$i<strlen($this->palabra);$i++){
            $this->palabraParcial.="_";
        }
    }

    function vidasRestantes(){
        return $this->vidas;
    }

    function mostrar(){
        return $this->palabraParcial;
    }

    function jugar($letra){
        $restar=true;
        for($i=0;$i<strlen($this->palabra);$i++){
            if($this->palabra[$i]==$letra && $this->palabraParcial[$i]=="_"){
                $this->palabraParcial[$i]=$letra;
                $restar=false;
            }
        }
        if($restar==true){
            $this->vidas--;
        }
    }

    function gane(){
        if($this->palabra===$this->palabraParcial){
            return true;
        }else{
            return false;
        }
    }

    function perdi(){
        if($this->vidas<=0){
            return true;
        }else{
            return false;
        }
    }
}