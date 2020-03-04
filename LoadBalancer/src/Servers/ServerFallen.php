<?php


namespace LB\Servers;

class ServerFallen implements \LB\Interfaces\Server{
    private $name;
   public function __construct(String $name){
        $this->name = $name;

        }
        public function call(){
            return 0;
        }
        public function getName(){
            return $this->name;
        }
    }
