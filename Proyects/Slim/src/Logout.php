<?php

namespace Carrito;

class Logout implements \Library\Controller{
    public function get($get,$post,&$session){
        session_destroy();
        
        header('Location: index.php');
        return "";
    }
    public function post($get,$post,&$session){

    }
}