<?php
    require_once("./vendor/autoload.php");

    require_once("LaVieja.php");

    use PHPUnit\Framework\TestCase;
    final class LaViejaTest extends TestCase

{
    function testExisteLaVieja(){
        $this->assertTrue(class_exists("LaVieja"));
    }

    function testExisteTablero(){
        $juego = new LaVieja;
        $this->assertTrue(!empty($juego->mostrar()));

    }

    function testDeTamañoTablero(){
        $juego = new LaVieja;
        $tamaño = $juego->mostrar();
        $this->assertEquals(3,count($tamaño[0]));
        $this->assertEquals(3,count($tamaño[1]));
        $this->assertEquals(3,count($tamaño[2]));

    }


    function testJugarXExiste(){
        $juego = new LaVieja;
        $juego->JugarX(1,2);
        $this->assertTrue(True);
        
    }
    function testJugarX(){
        $juego = new LaVieja;
        $juego->JugarX(1,2);
        $tablero = $juego->mostrar();
        $this->assertEquals("x",$tablero[1][2]);

    }
    function testJugarOExiste(){
        $juego = new LaVieja;
        $juego->JugarO(1,1);
        $this->assertTrue(True);
    }
    
    
    function testJugarO(){
        $juego = new LaVieja;
        $juego->JugarO(1,1);
        $tablero = $juego->mostrar();
        $this->assertEquals("o",$tablero[1][1]);
    }
    function testJugarVariasX(){
        $juego = new LaVieja;
        $juego->JugarX(1,0);
        $juego->JugarX(2,2);
        $juego->JugarX(0,2);
        $tablero = $juego->mostrar();
        $this->assertEquals("x",$tablero[1][0]);
        $this->assertEquals("x",$tablero[2][2]);
        $this->assertEquals("x",$tablero[0][2]);
       
    }

    function testganoX(){
        $juego = new LaVieja;
        $juego->ganoX();
        $this->assertTrue($juego->ganoX());
  
        }
    function testganoO(){
        $juego = new LaVieja;
        $juego->ganoO();
        $this->assertTrue($juego->ganoO());

    }



    function testEmpate(){
        $juego = new LaVieja;
        $juego->empate();
        $this->assertTrue($juego->empate());

    }

}






