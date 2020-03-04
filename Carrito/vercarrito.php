<?php

session_start();

$productos = array(
    '58'=>array('nombre'=>'manzana','precio'=>5),
    '25'=>array('nombre'=>'banana','precio'=>3),
    '31'=>array('nombre'=>'uvas','precio'=>7)
);

foreach($_SESSION['carro'] as $key){
    echo $productos[$key]['nombre'];
    echo $productos[$key]['precio'];
}





print_r ($_SESSION['productos'][$_GET['item']]);
echo "<a href='./lista_productos.php'>volver pa atras</a>";