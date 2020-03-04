<?php

require_once("./Queue.php");

class Stack{
    

    private $arreglo = array();
    


    public function push($element){
        array_push($this->arreglo,$element);
        return true;
        
    }
    
    public function pop(){
        $elemento =  array_pop($this->arreglo);
        return $elemento;
    }

    public function empty(){
       if(empty(array_values($this->arreglo))){
           return true;
       } 
    }
}
