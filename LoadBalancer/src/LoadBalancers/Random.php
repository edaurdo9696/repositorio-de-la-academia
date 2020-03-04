<?php

namespace LB\LoadBalancers;

use \LB\Interfaces\Server;
use \LB\Interfaces\LoadBalancer;

class Random implements Server, LoadBalancer{

    private $name;
    private $serverList = array();
    private $serverKey= array();
    private $numeroDeLlamadas = 0;

    public function __construct($name){
        $this->name = $name;
    }

    public function addServer(Server $server){
        if(!empty($this->serverList[$server->getName()])){
        return False;
    }
        $this->serverList[$server->getName()] = $server;
        $this->serverKey[] = $server->getName();
        return True;

    }
    public function removeServer(String $Name){
        if(empty($this->serverList[$server->getName()])){
        return False;
    }
    unset($this->serverList[$Name]);
        $this->serverKey[] = array();
        foreach($this->serverList as $servidor){
            $this->serverKey[] = $servidor->getName();
        }
    return True;

    }

    public function getName(){
        return $this->name;
    }

    public function call(){
        $key = array_rand($this->serverList);
            return $this->serverList[$key]->call();
        
    }
    

    public function getList(){
        return $this->serverList;
    }

}


