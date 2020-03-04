<?php

session_start();
include_once("../lib/TE.php");
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
foreach($_SESSION['carro'] as $id_lista_carro=>$id_lista_productos){
    $unproducto = new TemplateEngine("../templates/unProductoCarrito.html");
    $unproducto->addVariable('nombre',$productos[$id_lista_productos]['nombre']);
    $unproducto->addVariable('precio',$productos[$id_lista_productos]['precio']);
    $unproducto->addVariable('id',$id_lista_carro);
    $str.=$unproducto->render();
}



$carro = new TemplateEngine("../templates/vercarrito.html");
$carro->addVariable("productos",$str);
echo $carro->render();