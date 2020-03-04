<?php
session_start();
include_once("../lib/Router.php");
include_once("../vendor/autoload.php");

$router = new Router;
//$router->addRoute("login",new Carrito\Login());
$router->addRoute("paginaPrincipal", new Carrito\Paginas\PaginaPrincipal());
$router->addRoute("lista_productos",new Carrito\Paginas\Decorator(new Carrito\Paginas\ListaProductos()));

$router->addRoute("vercarrito",new Carrito\Paginas\VerCarrito());
$router->addRoute("agregar",new Carrito\Agregar()); 
$router->addRoute("borrar",new Carrito\Borrar());
$router->addRoute("logout",new Carrito\Logout());
/* $router->addRoute("","../src/paginaPrincipal.php"); */
$target = $router->match($_GET['page']);
/* include_once($target);  */

if(empty($_GET['page'])){
    $pagina = new Carrito\Paginas\PaginaPrincipal;
    echo $pagina->get($_POST,$_GET,$_SESSION); 
}

elseif($_SERVER['REQUEST_METHOD'] == "POST"){
    echo $target->post($_POST,$_GET,$_SESSION);
}else{
    echo $target->get($_POST,$_GET,$_SESSION);
}



/* if($_GET['page']==""){
    $pagina = new Carrito\Paginas\VerCarrito;
    echo $pagina->mostrar();
}  */

/* if($_GET['page']=="paginaPrincipal"){
    $pagina = new Carrito\Paginas\PaginaPrincipal;
    echo $pagina->mostrar();
}

if($_GET['page']=="login"){
    $pagina = new Carrito\Login;
    echo $pagina->mostrar();
}

if($_GET['page']=="lista_productos" and $_SESSION['logueado'] == true){
    $pagina = new Carrito\Paginas\ListaProductos;
    echo $pagina->mostrar();
}
if($_GET['page']=="vercarrito"){
    $pagina = new Carrito\Paginas\VerCarrito;
    echo $pagina->mostrar(); 
    
}

if($_GET['page']=="logout"){
    $pagina = new Carrito\Logout;
    echo $pagina->mostrar();
}

if($_GET['page']=="agregar"){
    $pagina = new Carrito\Agregar;
    echo $pagina->mostrar();
}
if($_GET['page']=="borrar" and $_SESSION['logueado'] == true){
    $pagina = new Carrito\Borrar;
    echo $pagina->eliminar();
} 
  */