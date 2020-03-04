<?php
session_start();
include_once("../lib/TE.php");

/* foreach($_SESSION['carrito'] as $k=>$valor){
    if($_SESSION['carrito'][$k]==$_GET['id']){
        unset($_SESSION['carrito'][$k]);
    break;
    }
}
 */

unset($_SESSION['carro'][$_GET['id']]);


$borrar = new TemplateEngine("../templates/borrar.html");
echo $borrar->render();