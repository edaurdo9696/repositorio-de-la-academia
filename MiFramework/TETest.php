<?php

require_once("./vendor/autoload.php");
require_once("TE.php");

use PHPUnit\Framework\TestCase;
final class TETest extends TestCase{

    public function testExisteClaseTE(){
    $this->assertTrue(class_exists("TE"));
    }

   // public function testAgregaVariables(){
   //     $template = new TE("ejemploDeTexto.template");
   //     $template->addVariable("","hola");
   //     $this->assertEquals("",$template->render());
   // }

    public function testSuplantaVariable(){
        $template = new TE("ejemploDeTexto.template");
        $this->assertTrue(in_array("Hello",$template->palabrasClave()));
    }

}
