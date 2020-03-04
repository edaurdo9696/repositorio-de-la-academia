<?php

require_once("./vendor/autoload.php");
require_once("./bosquephp.php");

use PHPUnit\Framework\TestCase;
final class bosqueTest extends TestCase{

function testExiste(){
    $this->assertTrue(class_exists("Bosque"));
}
function testExisteElBosque(){
    $bosque = new Bosque(10,100,100);
    $arreglo =$bosque->mostrar();
    $this->assertEquals(10,count($arreglo));
}
function testBrotes(){
    $bosque = new Bosque(10,100,100);
    $bosque->primavera();
    $arreglo =$bosque->mostrar();
    $this->assertTrue(in_array(1,$arreglo));
}

function testRayo(){
    $bosque = new Bosque(10,100,100);
    $bosque->primavera();
    $bosque->rayo();
    $arreglo =$bosque->mostrar();
    $this->assertTrue(in_array(-1,$arreglo));

}
/*function testIncendios(){
    $bosque = new Bosque(10,100,100);
    $bosque->primavera();
    $bosque->rayo();
    $bosque->incendios();
    $arreglo= $bosque->mostrar();
    $this->assertTrue(!in_array(1,$arreglo));
}*/
}