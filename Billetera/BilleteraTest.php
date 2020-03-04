<?php

require_once("./vendor/autoload.php");

require_once("Billetera.php");

use PHPUnit\Framework\TestCase;
final class BilleteraTest extends TestCase

{
    function testExisteBilletera() {
        $billetera=new BIlletera();
        $this->assertTrue(!empty($billetera));
    }
    function testAgregarBillete(){
        $billetera = new BIlletera();
        $billetera->agregar(100,5);
        $this->assertTrue(True);
    }
    function testTieneTotal(){
        $billetera = new Billetera();
        $total = $billetera->total();
        $this->assertTrue($total == 0);

    }
    function testAgregarBilleteVerificarTotal(){
        $billetera = new Billetera();
        $billetera->agregar(100,5);
        $total = $billetera->total();
        $this->assertTrue($total == 500);
        
    
    
    }
    function testagregarDosVeces(){
        $billetera= new Billetera();
        $billetera->agregar(100,5);
        $billetera->agregar(20,10);
        $total = $billetera->total();
        $this->assertEquals(700,$total);
    }


    function testAgregarDosvecesLoMismo(){
        $billetera =new Billetera();
        $billetera->agregar(100,5);
        $billetera->agregar(100,5);
        $total = $billetera->total();
        $this->assertEquals(1000, $total);

    }
    function testExisteSacar(){
        $billetera = new Billetera();
        $billetera->sacar(100,1);
        $total = $billetera->total();
        $this->assertEquals(0,$total);
    }

    function testAgregarYSacar(){
        $billetera = new BIlletera();
        $billetera->agregar(100,5);
        $billetera->sacar(100,1);
        $total = $billetera->total();
        $this->assertEquals(400, $total);
    }

    function testSacarDosVeces() {
        $billetera = new Billetera();
        $billetera->agregar(100,5);
        $billetera->sacar(100,1);
        $billetera->sacar(100,1);
        $total = $billetera->total();
        $this->assertEquals(300,$total);
    }

    function testSacarMasDeLoQueTenemos(){
        $billetera = new Billetera();
        $billetera->agregar(100,5);
        $billetera->sacar(100,6);
        $total = $billetera->total();
        $this->assertEquals(500,$total);
    }



}

