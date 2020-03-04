<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$app = AppFactory::create();


$app->get('/paginaPrincipal/', function (Request $request, Response $response, array $args) {
    $te = new \Library\TemplateEngine("../templates/paginaPrincipal.html");
    $response->getBody()->write($te->render());
    return $response;
});
$app->post('/paginaPrincipal/', function (Request $request, Response $response, array $args) {
    
    $usuarios = array("Eduardo"=>"academia","Matias"=>"global","Tom"=>"hitts");
        
    foreach($usuarios as $nombre=>$clave){
        if($_POST['nombre']==$nombre && $_POST['clave']==$clave){
            $_SESSION['logueado']= true;
        }
    }
    
    if($_SESSION['logueado'] == true){
        /* <br>
        <a href='index.php?page=lista_productos'>productos</a>"; */
        $response=$response->withStatus(302);
        $response=$response->withHeader('location','/ListaProductos/');
        return $response;
    }else{
        return $response->getBody()->write('usuario invalido <a href="index.php?page=paginaPrincipal">Reintentar</a>');
    }    

    
});
 $app->get('/ListaProductos/', function (Request $request, Response $response, array $args) {
    $te = new \Library\TemplateEngine("../templates/unProductoTemplate.html");
     $productos = array(
        58=>array('nombre'=>'manzana','precio'=>5),
        25=>array('nombre'=>'banana','precio'=>3),
        31=>array('nombre'=>'uvas','precio'=>7)
     );
     $str = "";
     foreach($productos as $id =>$fruta){
         $unproducto = new \Library\TemplateEngine("../templates/unProductoTemplate.html");
         $unproducto->addVariable('nombre',$fruta['nombre']);
         $unproducto->addVariable('precio',$fruta['precio']);
         $unproducto->addVariable('id',$id);
         $str.=$unproducto->render();

        
     }
    
     $teproductos = new \Library\TemplateEngine("../templates/lista_productos.html");
     $teproductos->addVariable("productos",$str);
  
   
     $response->getBody()->write($teproductos->render());
     return $response;

 });
 // $str = "";
 // foreach($_SESSION['carro'] as $id_lista_carro=>$id_lista_productos){
     //     print_r($productos[$id_lista_productos]);
     //     $unproducto = new \Library\TemplateEngine("../templates/unProductoCarrito.html");
     //     $unproducto->addVariable('nombre',$productos[$id_lista_productos]['nombre']);
     //     $unproducto->addVariable('precio',$productos[$id_lista_productos]['precio']);
     //     $unproducto->addVariable('id',$id_lista_carro);
     //     $str.=$unproducto->render();
     // }
     
     // $te->addVariable("productos", $str);
     
     // $response->getBody()->write($te->render());
     
     
     
     
     
     
     $app->get('/logout', function (Request $request, Response $response, array $args) {
         
         session_destroy();
         
         $response=$response->withStatus(302);
         $response=$response->withHeader('location','/paginaPrincipal/');
         
         return $response;
         
         
         
         
         
        });
        $app->group('', function (\Slim\Routing\RouteCollectorProxy $group){
            $group->get('/vercarrito', function (Request $request, Response $response, array $args) {
                $te = new \Library\TemplateEngine("../templates/vercarrito.html");
                $productos = array(
                    '58'=>array('nombre'=>'manzana','precio'=>5),
                    '25'=>array('nombre'=>'banana','precio'=>3),
                    '31'=>array('nombre'=>'uvas','precio'=>7)
                );
                
                $str = "";
                foreach($_SESSION['carro'] as $id_lista_carro=>$id_lista_productos){
                    $unproducto = new \Library\TemplateEngine("../templates/unProductoCarrito.html");
                    $unproducto->addVariable('nombre',$productos[$id_lista_productos]['nombre']);
                    $unproducto->addVariable('precio',$productos[$id_lista_productos]['precio']);
                    $unproducto->addVariable('id',$id_lista_carro);
                    $str.=$unproducto->render();
                    
                }
                $te->addVariable('productos',$str);
                
                $response->getBody()->write($te->render());
                return $response; 
                
                
                
            });
            $group->get('/carrito/borrar/{id}', function (Request $request, Response $response, array $args) {
                
                unset($_SESSION['carro'][$args['id']]);
                
                /* $borrar = new \Library\TemplateEngine("../templates/borrar.html"); */
                $response=$response->withStatus(302);
                $response=$response->withHeader('location','/vercarrito');
                return $response;
            });
            $group->get('/carrito/agregar/{id}', function (Request $request, Response $response, array $args) {
                //$te = new \Library\TemplateEngine ("../templates/vercarrito.html");  
                if(!isset($_SESSION['carro'])){
                    $_SESSION['carro'] = array();
                }
                
                if(isset($args['id'])){
                    $_SESSION['carro'][] = $args['id'];
                }
                var_dump($_SESSION['carro']);
                
                $productos = array(
                    '58'=>array('nombre'=>'manzana','precio'=>5),
                    '25'=>array('nombre'=>'banana','precio'=>3),
                    '31'=>array('nombre'=>'uvas','precio'=>7)
                );
                $response=$response->withStatus(302);
                $response=$response->withHeader('location','/vercarrito');
                return $response;
            });
            
        });
        
        $app->run();
    
