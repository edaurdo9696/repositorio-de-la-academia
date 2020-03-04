<?php

session_start();
include_once("TE.php");
$productos = array(
    58=>array('nombre'=>'manzana','precio'=>5),
    25=>array('nombre'=>'banana','precio'=>3),
    31=>array('nombre'=>'uvas','precio'=>7)
);

// foreach($_SESSION['carro'] as $key){
//     echo $productos[$key]['nombre'];
//     echo $productos[$key]['precio'];
// }
// print_r ($_SESSION['productos'][$_GET['item']]);

$str = "";
foreach($_SESSION['carro'] as $id){
    $unproducto = new TemplateEngine("unProductoCarrito.html");
    $unproducto->addVariable('nombre',$productos[$id]['nombre']);
    $unproducto->addVariable('precio',$productos[$id]['precio']);
    $unproducto->addVariable('id',$id);
    $str.=$unproducto->render();
}



$carro = new TemplateEngine("vercarrito.html");
$carro->addVariable("productos",$str);
echo $carro->render();