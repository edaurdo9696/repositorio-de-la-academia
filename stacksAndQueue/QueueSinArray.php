<?php
require_once("./Stack.php");


class QueueSinArray{

    private $Stack;
    private $Stack2;

    public function __construct(){
        $this->Stack = new Stack;
        $this->Stack2 = new Stack;
    }
    
    public function put($element){
            
        $this->Stack->push($element);
              
            
        return true;
    }
    public function get(){
        
        while(!$this->Stack->empty()){
            $this->Stack2->push($this->Stack->pop());
        }
        $elemento = $this->Stack2->pop();
        
        while(!$this->Stack2->empty()){
            $this->Stack->push($this->Stack2->pop());
        }
        $elemento = $this->Stack->pop();
        return $elemento;
    }
    public function size(){
        
        while(!$this->Stack->empty()){
            $this->Stack2->push($this->Stack->pop());
        }
        $count = 0;
        while(!$this->Stack2->empty()){
            $this->Stack->push($this->Stack2->pop());
            $count = $count + 1;
        }
        return $count;
        // contar con un segundo While;
    }
}   
