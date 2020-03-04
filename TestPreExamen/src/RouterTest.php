<?php

include './vendor/autoload.php';
include 'Router.php';

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase{

    public function testExisteLaClase(){
        $this->assertTrue(class_exists("Router"));
    }
    public function testAgregaController(){
        $nw = new Router;
        $this->assertTrue($nw->agregarController('path', "hola"));
    }
    public function testAgregarVacio(){
        $nw = new Router;
        $this->assertTrue($nw->agregarController('', ""));
    }
    
    
    public function testDeleteController(){
        $nw = new Router;
        $nw->agregarController('path', "hola");
        $po = $nw->deleteController('path');
        $this->assertTrue($po);
    }

    public function testDispatch(){
        $nw = new Router;
        $nw->agregarController('path', "hola");
        $po = $nw->dispatch('path');
        $this->assertEquals($po,"hola");
    }



}