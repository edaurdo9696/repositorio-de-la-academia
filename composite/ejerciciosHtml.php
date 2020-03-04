<?php

interface Dibujable{
    function dibujar();
}
class Html implements Dibujable{
    private $estructura = array();

    
    function dibujar(){
        echo "<html>";
        foreach ($this->estructura as $contenido){
           $contenido->dibujar();
        }
        echo "</html>";
    }
    function guardar($cont){
        $this->estructura[] = $cont;
    }
}

class Head implements Dibujable{
    
    private $cabeza;

    public function __construct($titulo){
         $this->cabeza = $titulo;
    }
    

    function dibujar(){
        echo "<head>".$this->cabeza."</head>";
    
    }
}

class Body implements Dibujable{
    private $estructura = array();

    
    function dibujar(){
        echo "<body>";
        foreach ($this->estructura as $contenido){
           $contenido->dibujar();
        }
        echo "</body>";
    }
    function guardar($cont){
        $this->estructura[] = $cont;
    }
}
class  P implements Dibujable{
    private $contenido;
    public function __construct($cuerpo){
        $this->contenido = $cuerpo;
    }
    function dibujar(){
        echo "<p>".$this->contenido."</p>";
    
    }

}
class  H1 implements Dibujable{
    private $contenido;
    public function __construct($cuerpo){
        $this->contenido = $cuerpo;
    }
    function dibujar(){
        echo "<H1>".$this->contenido."</H1>";
    
    }

}
class Imagen implements Dibujable{
    private $src;
    
    public function __construct($source){
        $this->src = $source;
     
    }
    
    function dibujar(){
        echo "<img src =".$this->src. ">";
    
    }

}
class Hipervinculo{
    
}


$imagen = new Imagen("tormenta.jpg");
$html = new Html();
$cabezal = new Head ("Hoy es Jueves");
$cuerpo = new Body ();
$parrafo = new P ("<b>Hoy el clima esta soleado,</b><br/> con temperaturas variables entre los 25°.<br/> Se esperan fuertes tormentas por la tarde");
$titulo = new H1("Clima");

$cuerpo->guardar($titulo);
$cuerpo->guardar($parrafo);
$cuerpo->guardar($imagen);
$html->guardar($cuerpo);
$html->dibujar();