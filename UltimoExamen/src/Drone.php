<?php

namespace Drone;


class Drone{

    private $bateria = 100;
    private $pasos = 0;
    private $x = 0;
    private $y = 0;
    
    
        
    public function mover($x, $y){
        
        if($x<20 and $x>=0 and $y == $y and $this->x != $x ){
            $bat = abs($this->x-$x);
            if($bat<=$this->bateria){
                $this->bateria = $this->bateria - $bat;
            }
            $this->y = $y;
            $this->x = $x;
            if($this->position() == array(0,0)){
                $this->bateria = 100;
            }
            return true;
        
        }
        
        elseif($y<20 and $y>=0 and $x == $x and $this->y != $y){
            $bat = abs($this->y-$y);
            if($bat<=$this->bateria){
                $this->bateria = $this->bateria - $bat;
            }
            $this->x = $x;
            $this->y = $y;
            if($this->position() == array(0,0)){
                $this->bateria = 100;
            }
            return true;
        }
        return false;
    }
             
    
    public function batery(){
        return $this->bateria;
    }
    public function position(){
        return array($this->x,$this->y);
    
    }

}
