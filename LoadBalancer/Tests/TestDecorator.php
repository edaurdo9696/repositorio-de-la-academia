<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class TestDecorator extends TestCase{
    
    public function testDecorator(){
        $decorado = new \LB\Decoradores\Decorador(new \LB\Servers\ServerOk("server1"));
        $this->assertEquals(200,$decorado->call());
        $this->assertEquals(1,$decorado->getCount());
    }
    public function testVariosDecorator(){
        $decorado = new \LB\Decoradores\Decorador(new \LB\Servers\ServerOk("server1"));
        $decorado->call();
        $decorado->call();
        $this->assertEquals(2,$decorado->getCount());
    }
}