<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

if(PHP_SAPI == 'cli-server'){
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file=__DIR__.$url['path'];
    if(is_file($file)) return false;
}

$app->get('/home', function (Request $request, Response $response, array $args) {
    $rt = new \Library\TemplateEngine('../templates/formulario.html');
    $response->getBody()->write($rt->render());
    return $response;
});


 $app->post('/resize', function (Request $request, Response $response, array $args){
    $img = $_POST['url'];
    $name = $_POST['nombre'].".jpg";
  
    // Fichero y nuevo tamaño
    $nombre_fichero = $img;
    $porcentaje = 0.5;
   
    // Tipo de contenido
    // header('Content-Type: image/jpeg');
   
    // Obtener los nuevos tamaños
    list($ancho, $alto) = getimagesize($nombre_fichero);
    $nuevo_ancho = $ancho * $porcentaje;
    $nuevo_alto = $alto * $porcentaje;
   
    // Cargar
    $thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
    $origen = imagecreatefromjpeg($nombre_fichero);
   
    // Cambiar el tamaño
    imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
    // Imprimir
    imagejpeg($thumb,$name);
    $response->withStatus(302);
    return $response->withHeader('Location','/show/'.$name);
    
 });
 $app->get('/show/{nombre}', function (Request $request, Response $response, array $args){
    $rt = new \Library\TemplateEngine('../templates/show.html');
    $url = $args['nombre'];
    $rt->addVariable("foto",$url);
    $response->getBody()->write($rt->render());
    return $response;
});

$app->run();
