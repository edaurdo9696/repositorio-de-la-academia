<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class TestFileStore extends TestCase{

    public function testSave(){
        $archivo = new \Blogs\FileStore("Edu");
        $arreglo = array("edu","tom","gab");
        $archivo->save($arreglo);
        $this->assertTrue(!empty($archivo));
        
    }
    public function testSaveDos(){
        $archivo = new \Blogs\FileStore("Edu");
        $arreglo = array("edu","tom","gab");
        $archivo->save($arreglo);
        $this->assertEquals(3,count($arreglo));
    }
    public function testRead(){
        $archivo = new \Blogs\FileStore("Edu");
        $arreglo = array("edu,tom,gab");
        $archivo->save($arreglo);
        $archivo->read();
        $this->assertEquals(1,count($arreglo));

    }

}