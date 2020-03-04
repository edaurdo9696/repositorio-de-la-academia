<?php

session_start();

$usuarios= array('Eduardo'=>'edu','Hola'=>'ho');
$_SESSION['logueable'] = false;
foreach($usuarios as $key=>$value){
    if($_POST['nombre']==$key && $_POST['clave']==$value){
        $_SESSION['logueable'] = true;
    }

}

echo '<a href ="lista_de_productos.php">volver</a>';
