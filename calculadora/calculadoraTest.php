<?php

require_once("./vendor/autoload.php");
require_once("Calculadora.php");

use PHPUnit\Framework\TestCase;
final class calculadoraTest extends TestCase{


    function testCalculadoraExiste(){
        $this->assertTrue(class_exists("Calculadora"));
    }
    function testSumarEXiste(){
        $calculadora = new Calculadora;
        $this->assertTrue(!empty($calculadora->sumar(5,3)));

    }
    function testSumarSuma(){
        $calculadora = new Calculadora;
        $suma = $calculadora->sumar(5,4);
        $this->assertEquals(9,$suma);

    }
    function testSumarVariasSumas(){
        $calculadora = new Calculadora;
        $sumatoria1 = $calculadora->sumar(2,9);
        $sumatoria2 = $calculadora->sumar(5,7);
        $sumatoria3 = $calculadora->sumar(4,3);
        $this->assertEquals(11,$sumatoria1);
        $this->assertEquals(12,$sumatoria2);
        $this->assertEquals(7,$sumatoria3);
    }

    function testRestarEXiste(){
        $calculadora = new Calculadora;
        $this->assertTrue(!empty($calculadora->restar(5,3)));
    }
    function testRestarResta(){
        $calculadora = new Calculadora;
        $resta = $calculadora->restar(5,4);
        $this->assertEquals(1,$resta);
    }
    function testDividirExiste(){
        $calculadora = new Calculadora;
        $this->assertTrue(!empty($calculadora->dividir(8,2)));

    }

    function testDividirDivide(){
        $calculadora = new Calculadora;
        $division = $calculadora->dividir(8,2);
        $this->assertEquals(4,$division);

    }
    function testDividirNegativos(){
        $calculadora = new Calculadora;
        $divisionDeNeg = $calculadora->dividir(8,-2);
        $this->assertEquals(-4,$divisionDeNeg);

    }
    function testDividirDosNegativos(){
        $calculadora = new Calculadora;
        $divisionDeDosNeg = $calculadora->dividir(-8,-2);
        $this->assertEquals(4,$divisionDeDosNeg);
    }
    
    function testMultiplicarExiste(){
        $calculadora = new Calculadora;
        $this->assertTrue(!empty($calculadora->multiplicar(8,2)));
    }
    
    function testMultiplicarMultiplica(){
        $calculadora = new Calculadora;
        $multiplicacion = $calculadora->multiplicar(5,3);
        $this->assertEquals(15,$multiplicacion);

    }

    function testMultiplicarNegativos(){
        $calculadora = new Calculadora;
        $multiplicacionNegativos = $calculadora->multiplicar(-5,3);
        $this->assertEquals(-15,$multiplicacionNegativos);
    }

    function testMultiplicarDosNegativos(){
        $calculadora = new Calculadora;
        $multiplicacionDosNegativos = $calculadora->multiplicar(-5,-3);
        $this->assertEquals(15,$multiplicacionDosNegativos);
    }
}
