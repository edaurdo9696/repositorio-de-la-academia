<?php

require_once("./vendor/autoload.php");
require_once("Ahorcado.php");

use PHPUnit\Framework\TestCase;
final class AhorcadoTest extends TestCase{

    function testExisteAhorcado(){
        $this->assertTrue(class_exists("Ahorcado"));
    }


    function testMostrar(){
        $palabrita = new Ahorcado("edu",4);
        $palabrita-> mostrar(); 
        $palabra = $palabrita->mostrar();
        $this->assertEquals(3,strlen("edu"));
    
        }
    
    function testJugar(){
        $palabrita = new Ahorcado("edu",4);
        $palabrita->jugar();
        $palabra = $palabrita->jugar();
        $this->assertEquals(in_array("d"),$palabra);


    }
    }
    





