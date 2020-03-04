<?php
session_start();
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$router->get('/', function () use ($router, $twig) {
    $twig->load("register.html");

    return $twig->render(("register.html"), (array("Registrarse" => "Hola Usuario")));
});

$router->post('/register', function () use ($router) {

    $_SESSION['usuarios'] = [];
    if (!in_array($_POST['nombre'],$_SESSION['usuarios'])) {
        $_SESSION['usuarios'][] = $_POST['nombre'];
    }

    return redirect("/login");
});

$router->get('/login', function () use ($router, $twig) {
    $twig->load("login.html");

     return $twig->render("login.html");
 });

$router->post('/login', function () use ($router) {
    $_SESSION['logueado'] = false;
    var_dump($_SESSION);
    foreach ($_SESSION['usuarios'] as $user) {
        if ($user == $_POST['nombre']) {
            $_SESSION['logueado'] = true;
        }
    }

     return redirect("/carro");
 }); 
 $router->post('/carro', function () use ($router, $twig) {
    

    $productos = array(
      1 => array("id"=>32,"marca"=>"Geoforce","modelo"=>"gtx 970","precio"=>"$5.000"),
      2 => array("id"=>34,"marca"=>"Geoforce","modelo"=>"gtx 1070","precio"=>"$25.000"),
      3 => array("id"=>35,"marca"=>"Geoforce","modelo"=>"rtx 2080","precio"=>"$95.000"),
      4 => array("id"=>35,"marca"=>"Radeon","modelo"=>"rx 580","precio"=>"$18.000"),
    );


     return $twig->render("carro.html",["productos" => $productos]);
 });

// redirect -> sirve para redireccionar a otra pagima, como el return respone de slim
