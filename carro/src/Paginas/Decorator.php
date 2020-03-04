<?php

namespace Carrito\Paginas;
use Library\Controller;

class Decorator implements \Library\Controller{
    private $nuevapage;
    
    public function __construct(controller $nuevapage){
        $this->nuevapage = $nuevapage;

    }
    public function get($get,$post,&$session){
        if($session['logueado'] == true){
            return $this->nuevapage->get($get,$post,$session);
        
        }else{
            return 'acceso no permitido';
        }
    }
    public function post($get,$post,&$session){
        if($session['logueado'] == true xor empty($session['logueado'])){
            return $this->nuevapage->post($get,$post,$session);
    }else{
        return 'no se puede por Post';
        }
    
    }

}        
