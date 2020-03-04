<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class RoundRobinTest extends TestCase{

        public function testSiAgregaServidores(){
            $loadb = new \LB\LoadBalancers\RoundRobin("Server1");
            $servidor = new \LB\Servers\ServerOk("S1");
            $loadb->addServer($servidor);
            $this->assertEquals(200, $loadb->call());
        }

        public function testLlamaPeroNoHayServer(){
            $lb = new \LB\LoadBalancers\RoundRobin("Server1");
            try {
                $lb->call();
            }catch (\Exception $e){
                $this->assertTrue(True);
            }
        }

        public function testLlamaMasDeUnServer(){
            $lb = new \LB\LoadBalancers\RoundRobin("Server1");
            $servidorOk = new \LB\Servers\ServerOk("S1");
            $servidorFail = new \LB\Servers\ServerFail("S2");
            $lb->addServer($servidorOk);
            $lb->addServer($servidorFail);
            $this->assertEquals(200, $lb->call());
            $this->assertEquals(500, $lb->call());
        }

        public function testLlamarTodosLosServers(){
            $lb = new \LB\LoadBalancers\RoundRobin("Server1");
            $servidorOk = new \LB\Servers\ServerOk("S1");
            $servidorFail = new \LB\Servers\ServerFail("S2");
            $servidorFallen = new \LB\Servers\ServerFallen("S3");
            $servidorNotFound = new \LB\Servers\ServerNotFound("S4");
            $servidorRedirect = new \LB\Servers\ServerRedirect("S5");
            $lb->addServer($servidorOk);
            $lb->addServer($servidorFail);
            $lb->addServer($servidorFallen);
            $lb->addServer($servidorNotFound);
            $lb->addServer($servidorRedirect);
            $this->assertEquals(200, $lb->call());
            $this->assertEquals(500, $lb->call());
            $this->assertEquals(0, $lb->call());
            $this->assertEquals(400, $lb->call());
            $this->assertEquals(300, $lb->call());
        
        }

        public function testRemoveServer(){
            $lb = new \LB\LoadBalancers\RoundRobin("Server1");
            $servidorOk = new \LB\Servers\ServerOk("S1");
            $lb->addServer($servidorOk);
            $lb->removeServer("S1");
            $this->assertTrue(empty($lb->getList()));
        }


    }