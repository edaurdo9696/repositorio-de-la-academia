<?php

namespace Carrito\Paginas;

class ListaProductos implements \Library\Controller{
    public function get($get,$post,&$session){
       
    $productos = array(
        '58'=>array('nombre'=>'manzana','precio'=>5),
        '25'=>array('nombre'=>'banana','precio'=>3),
        '31'=>array('nombre'=>'uvas','precio'=>7)
    );

    $str = "";
    foreach($productos as $id =>$fruta){
        $unproducto = new \Library\TemplateEngine("../templates/unProductoTemplate.html");
        $unproducto->addVariable('nombre',$fruta['nombre']);
        $unproducto->addVariable('precio',$fruta['precio']);
        $unproducto->addVariable('id',$id);
        $str.=$unproducto->render();

        
    }
    
    $teproductos = new \Library\TemplateEngine("../templates/lista_productos.html");
    $teproductos->addVariable("productos",$str);
    return $teproductos->render();
    
    }
    public function post($get,$post,&$session){

    }
}








