<?php

session_start();

$productos = array(1 => array('nombre'=>'manzana','precio'=>5),
2 => array('nombre'=>'naranja','precio'=>3));

foreach($productos as $k=>$v){
    echo $productos[$k]['nombre'];
    echo "<br>";
    echo $productos[$k]['precio'];
    echo "<br>"; "<a href = 'vercarrito.php'>ver carro</a>";
    echo "<a href = 'agregar.php?fruta=$k'>agregar</a>";

}