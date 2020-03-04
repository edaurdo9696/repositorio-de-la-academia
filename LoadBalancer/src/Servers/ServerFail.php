<?php


namespace LB\Servers;

class ServerFail implements \LB\Interfaces\Server{
    private $name;
   public function __construct(String $name){
        $this->name = $name;

        }
        public function call(){
            return 500;
        }
        public function getName(){
            return $this->name;
        }
    }
