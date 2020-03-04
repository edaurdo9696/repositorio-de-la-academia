<?php

namespace LB\LoadBalancers;

class RoundRobinStrategy implements \LB\Interfaces\Strategys{

    private $indice = 0;
    public function pick(array $servers){

        $servers = array_values($servers);

        $servidor = $servers[$this->indice];
        

        $this->indice = $this->indice + 1;
        if ($this->indice >= count($servers)){
            $this->indice = 0;

        }
        return $servidor;
    }
}