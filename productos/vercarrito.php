<?php
session_start();

$productos = array(1 => array('nombre'=>'manzana','precio'=>5),
2 => array('nombre'=>'naranja','precio'=>3));

print_r ($_SESSION['carrito']);
foreach($_SESSION['carrito'] as $key=>$value){
    echo "<h2>carrito: ".$value['nombre'].'</h2>';
    echo "<h2>carrito: ".$value['precio'].'</h2>';


}

