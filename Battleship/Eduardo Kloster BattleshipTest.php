<?php

require_once("./vendor/autoload.php");
require_once("./Battleship.php");

use PHPUnit\Framework\TestCase;
final class BattleshipTest extends TestCase{

    function testExisteBattleship(){
        $this->assertTrue(class_exists("Battleship"));

    }
    function testTablero1Existe(){
        $tablero = new Battleship(20,20,10);
        $tablero->mostrarTablero1();
        $this->assertTrue(True);
    }
    
    function testMostrarTablero1(){
        $tablero = new Battleship(5,5,2);
        $tablero-> mostrarTablero1(); 
        $tamaño = $tablero->mostrarTablero1();
        $this->assertEquals(5,count($tamaño[0]));
        $this->assertEquals(5,count($tamaño[1]));
        $this->assertEquals(5,count($tamaño[2]));
        $this->assertEquals(5,count($tamaño[3]));
        $this->assertEquals(5,count($tamaño[4]));
 

    }
    function testTablero2Existe(){
        $tablero = new Battleship(20,20,10);
        $tablero->mostrarTablero2();
        $this->assertTrue(True);

    }
    function testMostrarTablero2(){
        $tablero = new Battleship(20,20,10);
        $tablero-> mostrarTablero2(); 
        $tamaño = $tablero->mostrarTablero2();
        $this->assertEquals(20,count($tamaño[0]));
        $this->assertEquals(20,count($tamaño[1]));
        $this->assertEquals(20,count($tamaño[2]));
        $this->assertEquals(20,count($tamaño[3]));
        $this->assertEquals(20,count($tamaño[4]));
    }
    function testLongitudTablero(){
        $tablero = new Battleship(10,12,3);
        $juego = $tablero->MostrarTablero1();
        $this->assertEquals(10,count($juego));
        $this->assertEquals(12,count($juego[0]));
    }
    
    
    function testColocarNaveJugador1(){
        $tablero1 = new Battleship(20,20,10);
        $tablero1->colocarNaveJugador1(2,3);
        $tab = $tablero1->mostrarTablero1();
        $this->assertEquals(1,$tab[2][3]);
    }
    function testColocarNaveJugador2(){
        $tablero2 = new Battleship(20,20,10);
        $tablero2->colocarNaveJugador2(3,1);
        $tab = $tablero2->mostrarTablero2();
        $this->assertEquals(1,$tab[3][1]);

    }
   function testDisparoJugador1(){
    $tablero1 = new Battleship(20,20,10);
    $tablero1->colocarNaveJugador2(3,1);
    $tablero1->disparoTurnoJugador1(3, 1);
    $tab=$tablero1->mostrarTablero2();
    $this->assertEquals(2,$tab[3][1]);
   }
   function testDisparoJugador2(){
    $tablero1 = new Battleship(20,20,10);
    $tablero1->colocarNaveJugador1(2,3);
    $tablero1->disparoTurnoJugador2(2, 3);
    $tab=$tablero1->mostrarTablero1();
    $this->assertEquals(2,$tab[2][3]);
   }
   
    function testganoJugador1(){
     $tablero1 = new Battleship(5,5,2);
     $tablero1->colocarNaveJugador2(2,3);
     $tablero1->colocarNaveJugador2(1,3);
     $tablero1->disparoTurnoJugador1(2, 3);
     $tablero1->disparoTurnoJugador1(1, 3);
     $res=$tablero1->ganoJugador1();
     $tab=$tablero1->mostrarTablero2();
     $this->assertEquals(2,$tab[2][3]);
     $this->assertEquals(2,$tab[1][3]);
     $this->assertTrue($res);
    
    }
    function testganoJugador2(){
        $tablero1 = new Battleship(5,5,2);
        $tablero1->colocarNaveJugador1(2,3);
        $tablero1->colocarNaveJugador1(1,3);
        $tablero1->disparoTurnoJugador2(2, 3);
        $tablero1->disparoTurnoJugador2(1, 3);
        $res=$tablero1->ganoJugador2();
        $tab=$tablero1->mostrarTablero1();
        $this->assertEquals(2,$tab[2][3]);
        $this->assertEquals(2,$tab[1][3]);
        $this->assertTrue($res);
       
    }

    function testTerminoElJuego(){
        $tablero1 = new Battleship(5,5,2);
        $tablero1->colocarNaveJugador1(2,3);
        $tablero1->disparoTurnoJugador2(2, 3);
        $tablero1->ganoJugador2();
        $tab=$tablero1->mostrarTablero1();
        $res=$tablero1->terminoElJuego();
        $this->assertEquals(2,$tab[2][3]);
        $this->assertTrue($res);
    
    
    }

    function testCuantosTurnosPasaron(){
        $tablero1 = new Battleship(5,5,2);
        $tablero1->disparoTurnoJugador2(2, 3);
        $tablero1->disparoTurnoJugador1(1, 3);
        $tablero1->disparoTurnoJugador2(2, 1);
        $tab = $tablero1->CuantosTurnosPasaron();
        $this->assertEquals(3,$tab);
    }


}