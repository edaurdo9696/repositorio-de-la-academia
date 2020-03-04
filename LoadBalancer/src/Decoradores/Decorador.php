<?php


namespace LB\Decoradores;

use \LB\Interfaces\Server as Server;

class Decorador implements \LB\Interfaces\Server{
    
    private $count = 0;
    private $server;
    
    public function __construct(Server $s){
        $this->server = $s;

    }
    public function call(){
        $this->count += 1;
        return $this->server->call();
    }
    public function getName(){
        return $this->server->getName() ;
    }

    public function getCount(){
        return $this->count;
    }
}
