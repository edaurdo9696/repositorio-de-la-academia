<?php

namespace TestDrone;

class TestDrone extends \PHPUnit\Framework\TestCase {

    protected function setUp(): void {
        $this->drone = new \Drone\Drone();
    }

    public function testMoverUnLugar() {
        $res = $this->drone->mover(0, 1);
        $this->assertTrue($res);
    }
    public function testMoverVariosLugaresEnYYenX() {
        $res = $this->drone->mover(0, 2);
        $this->assertTrue($this->drone->mover(3, 2));
    }
    public function testMoverVariosLugaresEnX() {
        $res = $this->drone->mover(7, 0);
        $this->assertTrue($res);
    }
    public function testNoMovio() {
        $res = $this->drone->mover(0, 0);
        $this->assertFalse($res);
    }
    public function testMuevoMasde20(){
        $res = $this->drone->mover(0,33);
        $this->assertFalse($res);
    }
    public function testMuevoMenosde0(){
        $res = $this->drone->mover(0,-1);
        $this->assertFalse($res);
    }
    public function testBateriaSeGasta() {
        $res = $this->drone->mover(0, 3);
        $bat = $this->drone->batery();
        $this->assertEquals(97 , $bat);
        $this->assertTrue($res);
    }
    public function testBateriaSeGastaTodo() {
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 18);
        $bat = $this->drone->batery();
        $this->assertEquals(0 , $bat);
        $this->assertTrue($res);
    }
    public function testBateriaSeGastaTodoYRecarga() {
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 9);
        $res = $this->drone->mover(0, 19);
        $res = $this->drone->mover(0, 0);
        $bat = $this->drone->batery();
        $recargada = $this->drone->position(0,0);
        $this->assertEquals(100 , $bat);
        $this->assertTrue($res);
    }
}
