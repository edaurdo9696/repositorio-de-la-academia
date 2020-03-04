<?php

class TE{
    private $arreglo = array();
    private $strcopy;
    private $str;
    
    public function __construct($te){
        $this->str = file_get_contents($te);
        $this->strcopy = $this->str;
    } 
    public function addVariable($palabra1,$palabra2){
        $this->arreglo[$palabra1] = $palabra2;
    }
    public function render(){
        foreach($this->arreglo as $palabra1=>$palabra2){
            str_replace($palabra1,$palabra2,$this->strcopy);
        }
    return $this->strcopy;
    
    }

}

$te = new TE("ejercicio.template");
$te->addVariable("hoy es mi cumpleaños","hola");
echo $te->render();
