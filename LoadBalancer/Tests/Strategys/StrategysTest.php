<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class LBGenericoTest extends TestCase{

    public function testPikearRoundRobin(){
        $estrategia = new \LB\LoadBalancers\RoundRobinStrategy;
        $lb = new  \LB\LoadBalancers\LBGenerico("servidor1", $estrategia);
        $servidor1 = new \LB\Servers\ServerOk("S1");
        $servidor2 = new \LB\Servers\ServerFail("S2");
        $lb->addServer($servidor1);
        $lb->addServer($servidor2);
        $this->assertEquals(200, $lb->call());
        $this->assertEquals(500, $lb->call());

        }
    public function testPikearRandom(){
        $estrategia = new \LB\LoadBalancers\RandomStrategy;
        $lb = new  \LB\LoadBalancers\LBGenerico("servidor1", $estrategia);
        $servidor = new \LB\Servers\ServerOk("S1");
        $servidor1 = new \LB\Servers\ServerFail("S3");
        $lb->addServer($servidor);
        $lb->addServer($servidor1);
        $this->assertNotEquals(300, $lb->call());
        $this->assertNotEquals(0, $lb->call());
    }
    


}