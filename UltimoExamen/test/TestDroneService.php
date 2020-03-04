<?php

namespace TestDrone;
use Drone\DroneService;

class TestDroneService extends \PHPUnit\Framework\TestCase {

    private $collection;

    protected function setUp(): void{
        $conn = new \MongoDB\Client("mongodb://localhost");
        $this->collection = $conn->drones->modelos;
        $this->collection->drop();
        
    }
    public function testExisteClase() {
        $this->assertTrue(class_exists("Drone\DroneService"));
    }
    public function testRegisterOk(){
        $ds = new DroneService($this->collection);
        $drone= $ds->register("edu", "1234", "verde","x1");
        $this->assertTrue($drone);

    }
    public function testRegisterDrones(){
        $ds = new DroneService($this->collection);
        $drone= $ds->register("edu", "1234", "verde","x1");
        $this->assertTrue($drone);
        $drone2= $ds->register("maria", "1300", "rojo","x2");
        $this->assertTrue($drone2);
    }
    public function testDelete(){
        $ds = new DroneService($this->collection);
        $drone= $ds->register("edu", "1234", "verde","x1");
        $this->assertTrue($ds->delete("edu"));
    }
    public function testlist(){
        $ds = new DroneService($this->collection);
        $drone= $ds->register("edu", "1234", "verde","x1");
        $drone2= $ds->register("maria", "1300", "rojo","x2");
        $this->assertEquals(2, count($ds->list()));
    }
}