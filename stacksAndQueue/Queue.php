<?php



class Queue{

    private $arreglo = array();
    
    
    public function __construct(){

    }
    
    public function put($element){
        $i=0;
            while($i<count($this->arreglo)-1){
                $arreglo[] = $element;
            }
            $i = $i+1;
        return true;
    }
    public function get(){
       $elemento = array_shift($this->arreglo);
        return $elemento;
    }
    public function size(){
        return array_values($this->arreglo);
    }
}   
