<?php


/**
 * Cantidad de bicicletas te dice cuantas bicicletas podes armar.
 * Para armar una bicicleta necesitas 2 ruedas, 1 cuadro y 1 volante.
 */
class Bicicleteria {
  
  private $countVolante = 0;
  private $countCuadros = 0;
  private $countRuedas = 0;
  
  
  public function __construct() {
  
  }

  public function agregarRuedas(int $cantidad) {
  
    $this->countRuedas += $cantidad;
    return true;
    }
    

  public function sacarRuedas(int $cantidad) {
    
    if($this->countRuedas  = $cantidad){
      $this->countRuedas = 0;
      return true;
    }
  
    if($this->countRuedas  > $cantidad){
      $this->countRuedas -= $cantidad;
      return true;
    }
    
  
  }

  public function agregarCuadro(int $cantidad) {
    
    $this->countCuadros += $cantidad;
    return true;
    }
    

  public function sacarCuadro($cantidad) {
    if($this->countCuadros  = $cantidad){
      $this->countCuadros = 0;
      return true;
    }
    if($this->countCuadros  > $cantidad){
      $this->countCuadros -= $cantidad;
      return true;
    }
  }

  public function agregarVolante($cantidad) {
      $this->countVolante += $cantidad;
      return true;
    }
   
  
  public function sacarVolante($cantidad) {
    
    if($this->countVolante>=$cantidad){
      $this->countVolante-=$cantidad;
    }
  }

  public function cantidadBicicletas() {
    $count =0;
    $ruedas = $this->countRuedas ;
    $volante = $this->countVolante ;
    $cuadros = $this->countCuadros;
    while($ruedas >1 and $volante >0 and $cuadros >0){
     
      $ruedas -=2 ;
      $volante -=1 ;
      $cuadros -= 1;
      $count += 1;
    }
    return $count;
  }
}

