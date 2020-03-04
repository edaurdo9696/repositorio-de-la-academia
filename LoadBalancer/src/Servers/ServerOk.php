<?php


namespace LB\Servers;

class ServerOk implements \LB\Interfaces\Server{
    private $name;
    public function __construct(String $name){
        $this->name = $name;

        }
        public function call(){
            return 200;
        }
        public function getName(){
            return $this->name;
        }
    }


