<?php

namespace LB\LoadBalancers;

use \LB\Interfaces\Server;
use \LB\Interfaces\LoadBalancer;
use \LB\Interfaces\Strategys;

class LBGenerico implements Server, LoadBalancer{

    private $strategys;
    private $name;
    private $serverList = array();
    private $serverKey= array();
    private $numeroDeLlamadas = 0;
    
    public function __construct(String $name, Strategys $strategys){
        $this->name = $name;
        $this->strategys = $strategys;
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
        if(empty($this->serverList)){
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
    
    public function getList(){
        return $this->serverList;
    }
    
    public  function call(){
        $s = $this->strategys->pick($this->serverList);
        return $s->call();
    }
    
   
}