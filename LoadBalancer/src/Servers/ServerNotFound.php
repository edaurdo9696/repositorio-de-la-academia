<?php


namespace LB\Servers;

class ServerNotFound implements \LB\Interfaces\Server{
    private $name;
   public function __construct(String $name){
        $this->name = $name;

        }
        public function call(){
            return 400;
        }
        public function getName(){
            return $this->name;
        }
    }
