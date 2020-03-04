<?php


namespace Carrito;

class Borrar implements \Library\Controller{

    public function get($get,$post,&$session){
        $te = new \Library\TemplateEngine;
        
        unset($_SESSION['carro'][$_GET['id']]);
        
        $borrar = new \Library\TemplateEngine("../templates/borrar.html");
        
        return $borrar->render();
    }
    public function post($get,$post,&$session){

    }

}

