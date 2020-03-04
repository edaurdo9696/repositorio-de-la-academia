<?php
session_start();
include_once("../lib/Router.php");

$router = new Router;
$router->addRoute("login","../src/login.php");
$router->addRoute("paginaPrincipal","../src/paginaPrincipal.php");
$router->addRoute("lista_productos","../src/lista_productos.php");
$router->addRoute("vercarrito","../src/vercarrito.php");
$router->addRoute("agregar","../src/agregar.php");
$router->addRoute("borrar","../src/borrar.php");
$router->addRoute("logout","../src/logout.php");
$router->addRoute("","../src/paginaPrincipal.php");
$target = $router->match($_GET['page']);
include_once($target);


/* if($_GET['page']==""){
    include_once("../src/paginaPrincipal.php");
}

if($_GET['page']=="paginaPrincipal"){
    include_once("../src/paginaPrincipal.php");
}

if($_GET['page']=="login"){
    include_once("../src/login.php");
}

if($_GET['page']=="lista_productos"){
    include_once("../src/lista_productos.php");
}

if($_GET['page']=="logout"){
    include_once("../src/logout.php");
}

if($_GET['page']=="vercarrito"){
    include_once("../src/vercarrito.php");
}
if($_GET['page']=="agregar"){
    include_once("../src/agregar.php");
}
if($_GET['page']=="borrar"){
    include_once("../src/borrar.php");
} */
