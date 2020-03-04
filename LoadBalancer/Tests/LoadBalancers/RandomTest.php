<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class RandomTest extends TestCase{

    
    public function testSiAgregaServidores(){
        $loadb = new \LB\LoadBalancers\Random("Server1");
        $servidor = new \LB\Servers\ServerOk("S1");
        $loadb->addServer($servidor);
        $this->assertEquals(200, $loadb->call());
    }
    
    public function testSiAgregaAlgunServidor(){
        $loadb = new \LB\LoadBalancers\Random("Server1");
        $servidor = new \LB\Servers\ServerOk("S1");
        $servidor1 = new \LB\Servers\ServerFail("S3");
        $loadb->addServer($servidor);
        $loadb->addServer($servidor1);
        $this->assertNotEquals(300, $loadb->call());
        $this->assertNotEquals(0, $loadb->call());
    }


}