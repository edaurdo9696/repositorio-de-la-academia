<?php
session_start();
if(!empty($_GET['fruta'])){
    $_SESSION['carrito'][]= $_GET['fruta'];
}
$productos = array(1 => array('nombre'=>'manzana','precio'=>5),
2 => array('nombre'=>'naranja','precio'=>3));

$_SESSION['carrito'][]=$producto[$_GET['fruta']];

echo "<a href ='vercarrito.php'>ver</a>";