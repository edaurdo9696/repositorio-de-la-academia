<?php

session_start();

$productos = array(
    '58'=>array('nombre'=>'manzana','precio'=>5),
    '25'=>array('nombre'=>'banana','precio'=>3),
    '31'=>array('nombre'=>'uvas','precio'=>7)
);


foreach($productos as $id =>$fruta){
   echo $fruta['nombre']."<br>";
   echo "precio"."<br>";
   echo $fruta['precio']."<br>";
   echo "<a href ='agregar.php?item=$id'>agregar al carro</a>" .'<br>';
    
}




