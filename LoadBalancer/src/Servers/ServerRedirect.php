<?php


namespace LB\Servers;

class ServerRedirect implements \LB\Interfaces\Server{
    private $name;
   public function __construct(String $name){
        $this->name = $name;

        }
        public function call(){
            return 300;
        }
        public function getName(){
            return $this->name;
        }
    }
