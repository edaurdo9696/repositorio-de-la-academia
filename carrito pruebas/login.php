<?php
session_start();

$usuarios = array("Eduardo"=>"academia","Matias"=>"global","Tom"=>"hitts");

foreach($usuarios as $nombre=>$clave){
    if($_POST['nombre']==$nombre && $_POST['clave']==$clave){
        $_SESSION['logueado']= true;
    }
}

if($_SESSION['logueado'] == true){

    echo "logueado";
    echo "<br>";
    echo '<a href="./lista_productos.php">productos</a>';
}else{
    echo 'usuario invalido <a href="./login.php">Reintentar</a>';
}    
