<?php

namespace Carrito;

class Agregar implements \Library\Controller{

    public function get($get,$post,&$session){
        
        $te = new \Library\TemplateEngine ("../templates/vercarrito.html"); 
        
        if(isset($_GET['item'])){
        $_SESSION['carro'][] = $_GET['item'];
        
        }
        print_r($_SESSION['carro'][$_GET['item']]);
        
        $productos = array(
            58=>array('nombre'=>'manzana','precio'=>5),
            25=>array('nombre'=>'banana','precio'=>3),
        31=>array('nombre'=>'uvas','precio'=>7)
        );
        $str = "";
        foreach($_SESSION['carro'] as $id_lista_carro=>$id_lista_productos){
            $unproducto = new \Library\TemplateEngine("../templates/unProductoCarrito.html");
            $unproducto->addVariable('nombre',$productos[$id_lista_productos]['nombre']);
            $unproducto->addVariable('precio',$productos[$id_lista_productos]['precio']);
            $unproducto->addVariable('id',$id_lista_carro);
            $str.=$unproducto->render();
        }

        $te->addVariable("productos", $str);

        return $te->render();
        
    }
    public function post($get,$post,&$session){

    }

}

