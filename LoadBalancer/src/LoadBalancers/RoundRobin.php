<?php

namespace LB\LoadBalancers;

use \LB\Interfaces\Server;
use \LB\Interfaces\LoadBalancer;

class RoundRobin implements Server, LoadBalancer{

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

public function call(){
    if(empty($this->serverList)){
        throw new \Exception();
        }
    $key = $this->serverKey[$this->numeroDeLlamadas];
    $server = $this->serverList[$key];

    $this->numeroDeLlamadas = $this->numeroDeLlamadas + 1;
    if ($this->numeroDeLlamadas >= count($this->serverList)){
        $this->numeroDeLlamadas = 0;

    }
    return $server->call();
    }
    public function getList(){
    return $this->serverList;
    }

}