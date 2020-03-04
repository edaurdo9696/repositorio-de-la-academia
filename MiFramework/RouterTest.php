<?php

require_once("./vendor/autoload.php");
require_once("Router.php");

use PHPUnit\Framework\TestCase;
final class RouteTest extends TestCase{

public function testExisteClaseRouter(){
  $this->assertTrue(class_exists("Router"));
}

public function testAgrega(){
    $router = new Router;
    $router->addRoute("ejemplo","target");
    $this->assertTrue(!empty($router));
}
public function testAgregaVarias(){
  $router = new Router;
  $router->addRoute("ejemplo","target");
  $router->addRoute("ejemplo2","target");
  $router->match("ejemplo");
  $this->assertTrue(!empty($router));
  $this->assertEquals("target",$router->match("ejemplo"));
  $this->assertEquals("target",$router->match("ejemplo2"));
}
public function testMactheaLaMisma(){
  $router = new Router;
  $this->assertTrue($router->addRoute("ejemplo","target"));
  $this->assertFalse($router->addRoute("ejemplo","hola"));
}
public function testMatchNuevo(){
  $direccion = new Router;
  $direccion->addRoute("/noticia/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",100);
  $direccion->match("/noticia/4564/fecha/2014/10/2/.html");
  $this->assertTrue(True);
}
public function testMatchearOtraUrls(){
  $direccion = new Router;
  $direc = $direccion->addRoute("/noticia/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",100);
  $direc = $direccion->match("/noticia/4564/fecha/2014/10/2.html");
  $this->assertEquals(100,$direc);
}
public function testMatchearVarias(){
  $direccion = new Router;
  $direc = $direccion->addRoute("/noticia/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",100);
  $direc = $direccion->match("/noticia/4564/fecha/2014/10/2.html");
  $otro = $direccion->addRoute("/noticion/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",75);
  $otro = $direccion->match("/noticion/4564/fecha/2014/10/2.html");
  $this->assertEquals(100,$direc);
  $this->assertEquals(75,$otro);
}
public function testMatchearMas(){
  $direccion = new Router;
  $direc = $direccion->addRoute("/noticia/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",100);
  $direc = $direccion->match("/noticia/4564/fecha/2014/10/2.html");
  $otro = $direccion->addRoute("/noticion/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",75);
  $otro = $direccion->match("/noticion/12354/fecha/2014/10/2.html");
  $ultima = $direccion->addRoute("/diario/\d+/fecha/\d{4}/\d{2}/\d{1,2}\.html",35);
  $ultima = $direccion->match("/diario/5642/fecha/2014/10/2.html");
  $this->assertEquals(100,$direc);
  $this->assertEquals(75,$otro);
  $this->assertEquals(35,$ultima);
}
public function testNuevaRuta(){
  $ruta = new Router;
  $rut = $ruta->addRoute("/edu/\w+/\d+/d{4}.")
}
}