<?php

require_once("./vendor/autoload.php");
require_once("./Stack.php");

use PHPUnit\Framework\TestCase;
final class StackTest extends TestCase{

    public function testClassEXiste(){
        $this->assertTrue(class_exists('Stack'));
    }
    public function testAgregaElementoALaFila(){
       $arreglo = new Stack;
       $arregloConElemento = $arreglo->push('algo');
       $this->assertTrue(!empty($arregloConElemento));
    }
    public function testAgregaMasElementoALaFila(){
        $arreglo = new Stack;
        $arregloConElemento = $arreglo->push('algo');
        $arregloConElemento = $arreglo->push('algomas');
        $this->assertEquals(2,$arregloConElemento);
     }
    

}