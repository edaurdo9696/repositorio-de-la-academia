<?php


class Decorator{
//    constructor recibe consecionaria;
//    hacer acumulador que me muestre cuando gane con la venta de ese auto;
   private $decorado;
   
   public function __consruct(){

   }

   public function mostrarAutosDeMarca($marca) {
    return $this->decorado->mostrarAutosDeMarca($marca);

    }

    public function agregarAutos($idReferencia, $marca, $modelo, $anio, $precio){
        return $this->decorado->agregarAutos($idReferencia, $marca, $modelo, $anio, $precio);
    }

    public function mostrarAutosDeMarca($marca){
        return $this->mostrarAutosDeMarca($marca);
    }

}
