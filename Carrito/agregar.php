<?php

session_start();


if(isset($_GET['item'])){
$_SESSION['carro'][] = $_GET['item'];

}
print_r($_SESSION['carro'][$_GET['item']]);


echo "<a href =./vercarrito.php>ver compras</a>"; 
