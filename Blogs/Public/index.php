<?php
session_start();
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/register', function (Request $request, Response $response, array $args) {
    $rt = new \Library\TemplateEngine('../Templates/register.html');
    $response->getBody()->write($rt->render());
    return $response;
});
$app->post('/register', function (Request $request, Response $response, array $args) {
    $bl = new \Blogs\UserService;
    if($bl->saveUser($_POST['nombre'])){
        $response = $response->withStatus(302);
        $response = $response->withHeader("Location","/login");
    }else{
        $response = $response->withStatus(302);
        $response = $response->withHeader("Location","/register");
    }
    return $response;
});  
$app->get('/login', function (Request $request, Response $response, array $args) {
    $rd = new \Library\TemplateEngine('../Templates/login.html');
    $response->getBody()->write($rd->render());
    return $response;
});   
$app->post('/login', function (Request $request, Response $response, array $args) {
    $kl = new \Blogs\UserService;
    if($kl->userExists($_POST['nombre'])){
        $_SESSION['nombre']= $_POST['nombre'];
        $response = $response->withStatus(302);
        $response = $response->withHeader("Location","/user/".$_POST['nombre']);
    }
    return $response;
});
$app->get('/users', function (Request $request, Response $response, array $args) {
    $index = new \LB\TemplateEngine("../templates/usuariopost.html");
    $userService = new \LB\UserService();
    $users = $userService->getAllUsers();
    $usuariosString = "";
    foreach($users as $user){
        $usuarioTemplate = new \LB\TemplateEngine("../templates/usuariopost.html");
        $usuarioTemplate->addVAriable("user",$user);
        $usuariosString .= $usuarioTemplate->render();
    }
    $index->addVariable("users",$usuariosString);
    $response->getBody()->write($index->render());
    return $response;
});
$app->get('/me', function (Request $request, Response $response, array $args) {
    $blg = new \Blogs\BlogService;
    $usuario = $_SESSION['nombre']; 
    $post = $blg->getAllPosts($usuario);
    
    $str = "";
    foreach($post as $ot){
        $template = new \Library\TemplateEngine('../Templates/post.html');
        $template->addVariable('posteo',$ot);
        $str .= $template->render();
    }
    $te = new \Library\TemplateEngine('../Templates/usuariopost.html');
    $te->addVariable("post",$str);
    $te->addVariable("Usuario","Mi Post");

    $response->getBody()->write($te->render());
    return $response;


});
 $app->post('/me', function (Request $request, Response $response, array $args) {
    $blg = new \Blogs\BlogService;
    $usuario = $_SESSION['nombre']; 
    $post = $blg->getAllPosts($usuario);
    
    $str = "";
    foreach($post as $ot){
        $template = new \Library\TemplateEngine('../Templates/post.html');
        $template->addVariable('posteo',$ot);
        $str .= $template->render();
    }
    $te = new \Library\TemplateEngine('../Templates/usuariopost.html');
    $te->addVariable("post",$str);
    $te->addVariable("Usuario","Mi Post");
    $response->getBody()->write($te->render());
    return $response;
 });
 
$app->run();

