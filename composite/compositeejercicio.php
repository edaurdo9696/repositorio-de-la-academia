<?php
interface Mostrable {
    public function mostrar();
}
interface Guardable {
    public function sumarEspacio();
}

class Caja implements Mostrable, Guardable {
    private $capacidadUtilizada;
    private $dimensiones;
    private $capacidad;
    private $contenido = array();
    
    public function __construct(int $dimensiones){
        $this->dimensiones = $dimensiones;
        $this->capacidadUtilizada = 0;
    }
    public function guardar(Mostrable  $obj) {
        
        if($this->capacidadUtilizada <= $obj->dimensionesDeObj()){
            $this->capacidadUtilizada = $this->dimensiones + $obj->dimensionesDeObj();
            $this->contenido[] = $obj;
        }
    }
    public function dimensionesDeObj(){
        return $this->dimensiones;
    }


    public function sumarEspacio(){
        if($this->dimensiones < $dimensiones->$obj){
            $this->capacidadUtilizada = $this->capacidadUtilizada + $dimensiones->$obj;
        }
    }   
    
    public function mostrar() {
        echo "Soy el contenido de una caja:\n";
        foreach($this->contenido as $valor) {
            $valor->mostrar();
        }
    }
    public function cantidad() {
        return count($this->contenido);
    }
}
class Bici implements Mostrable, Guardable{
    public $nombre = "soy una bici";
    public $espacio = 5;
    public function mostrar() {
        echo $this->nombre."\n";
    }
    public function sumarEspacio(){
        return $this->espacio;
    }
    public function dimensionesDeObj(){
        return $this->espacio;
    }

    }
class Auto implements Mostrable {
    public $nombre = "soy una Auto";
    public $espacio = 2;
    public function mostrar() {
        echo "soy auto\n";
    }
    public function sumarEspacio(){
        return $this->espacio;
    }
    public function dimensionesDeObj(){
        return $this->espacio;
    }



}

$micaja = new Caja(10);
$segundacaja = new Caja(15);
$micaja->guardar($segundacaja);
$bici = new Bici();
$auto = new Auto();
$segundacaja->guardar($bici);
$segundacaja->guardar($auto);
echo "La primera caja tiene: ".$micaja->cantidad()."\n";
echo "La primera caja tiene: ".$micaja->mostrar()."\n";
echo "La segunda caja tiene: ".$segundacaja->cantidad()."\n";
echo "La segunda caja tiene: ".$segundacaja->mostrar()."\n";