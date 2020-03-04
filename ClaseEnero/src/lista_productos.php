<?php

session_start();
include_once("../lib/TE.php");

$productos = array(
    '58'=>array('nombre'=>'manzana','precio'=>5),
    '25'=>array('nombre'=>'banana','precio'=>3),
    '31'=>array('nombre'=>'uvas','precio'=>7)
);


// foreach($productos as $id =>$fruta){
//    echo $fruta['nombre']."<br>";
//    echo "precio"."<br>";
//    echo $fruta['precio']."<br>";
//    echo "<a href ='agregar.php?item=$id'>agregar al carro</a>" .'<br>';
    
// }


$str = "";
foreach($productos as $id =>$fruta){
    $unproducto = new TemplateEngine("../templates/unProductoTemplate.html");
    $unproducto->addVariable('nombre',$fruta['nombre']);
    $unproducto->addVariable('precio',$fruta['precio']);
    $unproducto->addVariable('id',$id);
    $str.=$unproducto->render();
}


$teproductos = new TemplateEngine("../templates/lista_productos.html");
$teproductos->addVariable("productos",$str);
echo $teproductos->render();







