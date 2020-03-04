<?php

namespace TestAjedrez;

require_once("../vendor/autoload.php");


use PHPUnit\Framework\TestCase;
final class TableroTest extends TestCase{

    public function testExisteClase(){
        $this->assertTrue(class_exists('Ajedrez\Tablero'));
    }
    public function testColocarUnaPieza(){
        $tablero = new \Ajedrez\Tablero();
        $torre = $tablero->colocarPieza(0,1,"torre");
        $this->assertTrue(!empty($torre));

    }
    public function testMostrarUnaPieza(){
        $tablero = new \Ajedrez\Tablero();
        $torre = new \Ajedrez\Torre("blanco");
        $tablero->colocarPieza(0,0,$torre);
        $this->assertTrue(in_array($torre, $tablero->mostrar()));

    }

}