<?php

require_once("./vendor/autoload.php");
require_once("./Consecionaria.php");

use PHPUnit\Framework\TestCase;
final class ConsecionariaTest extends TestCase{

    function testExisteConcesionaria(){
        $this->assertTrue(class_exists("Concesionaria"));
        
     }
     function testSePuedenAgregarAutos(){
         $autos = new Concesionaria;
         $autos->agregarAutos("5","peugeot","206","2008",50.000);
         $this->assertTrue(True);
     }
     function testAgregarVariosAutos(){
        $autos = new Concesionaria;
        $autos->agregarAutos("5","peugeot","206","2008",50.000);
        $autos->agregarAutos("1","renault","19","2003",10.000);
        $this->assertTrue(True);
    }
    function testMostrarAutos(){
        $autos = new Concesionaria;
        $autos->agregarAutos("5","peugeot","206","2008",50.000);
        $autos->agregarAutos("1","renault","19","2003",10.000);
        $autos->agregarAutos("2","peugeot","207","2009",55.000);
        $auto = $autos->mostrarAutosDeMarca("peugeot");
        $this->assertEquals(2,count($auto));
    }
    function testMostrarAutos2(){
        $autos = new Concesionaria;
        $autos->agregarAutos("5","peugeot","206","2008",50.000);
        $autos->agregarAutos("1","renault","19","2003",10.000);
        $autos->agregarAutos("2","peugeot","207","2009",55.000);
        $auto = $autos->mostrarAutosDeMarca("renault");
        $this->assertEquals(1,count($auto));
    }
    function testVenderAuto(){
        $autos = new Concesionaria;
        $autos->agregarAutos("5","peugeot","206","2008",50.000);
        $autos->agregarAutos("1","renault","19","2003",10.000);
        $autos->agregarAutos("2","peugeot","207","2009",55.000);
        $autos->mostrarAutosDeMarca("ferrari");
        $venta = $autos->venderAutoMarca("ferrari");
        $this->assertEquals(0,$venta);
    }

    function testVenderAutoMasCaro(){
        $autos = new Concesionaria;
        $autos->agregarAutos("5","peugeot","206","2008",50.000);
        $autos->agregarAutos("1","renault","19","2003",10.000);
        $autos->agregarAutos("2","peugeot","207","2009",55.000);
        $autos->mostrarAutosDeMarca("peugeot");
        $venta = $autos->venderAutoMarca("peugeot");
        $this->assertEquals(55.000,$venta);
    }
    function testTotalGanado(){
        $autos = new Concesionaria;
        $autos->agregarAutos("5","peugeot","206","2008",50.000);
        $autos->agregarAutos("1","renault","19","2003",10.000);
        $autos->agregarAutos("2","peugeot","207","2009",95.000);
        $autos->mostrarAutosDeMarca("peugeot");
        $autos->venderAutoMarca("peugeot");
        $dinero = $autos->totalGanado();
        $this->assertEquals(95.000,$dinero);

    }

}    



    