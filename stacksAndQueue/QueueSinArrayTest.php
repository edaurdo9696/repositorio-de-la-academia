<?php

require_once("./vendor/autoload.php");
require_once("./QueueSinArray.php");

use PHPUnit\Framework\TestCase;
final class QueueSinArrayTest extends TestCase{

    public function testClassEXiste(){
        $this->assertTrue(class_exists('QueueSinArray'));
    }

    public function testSize(){
        $Stack1 = new Stack;
        $Stack2 = new Stack;
        $elemento = new QueueSinArray($Stack1 , $Stack2);
        $Stack = $elemento -> put('hola');
        


    }

}