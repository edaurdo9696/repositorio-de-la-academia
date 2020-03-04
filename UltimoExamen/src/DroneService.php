<?php

namespace Drone;

class DroneService{

    private $collection;

    public function __construct($collection){
        $this->collection= $collection;
    }
    public function register(string $nombre, string $precio, string $color, string $modelo) {
        $drone = $this->collection->findOne(['nombre'=> $nombre]);
        if(is_null($drone)){
                $drones = array();
                $drones['nombre'] = $nombre;
                $drones['precio'] = $precio;
                $drones['color'] = $color;
                $drones['modelo'] = $modelo;
                $this->collection->insertOne($drones);
                return true;
            } else {
                return false;
            }
        }

    public function delete($nombre){
        $drone = $this->collection->findOne(['nombre'=> $nombre]);
        if(is_null($drone)){
                return false;
            }
            $confirm = $this->collection->deleteOne(array("nombre" => $nombre));
            
            return true;
    }
    public function list(){
        
        $cursor = $this->collection->find(array());
        $drones = array();
        foreach($cursor as $drone){
           $documento = array(
                $drone["nombre"],
                $drone["precio"],
                $drone["color"],
                $drone["modelo"]);
            
            $drones [] = $drone;
        }
        return $drones;
    }
}