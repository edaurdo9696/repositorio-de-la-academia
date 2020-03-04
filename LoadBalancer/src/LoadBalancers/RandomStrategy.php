<?php

namespace LB\LoadBalancers;

class RandomStrategy implements \LB\Interfaces\Strategys{

    
    public function pick(array $servers){
        $key = array_rand($servers); 
        return $servers[$key];
    }
}