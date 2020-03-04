<?php
class Calculadora {
  
  function sumar($a, $b) {
    return $a + $b;
  }
  
  function restar($a, $b) {
    return $this->sumar($a, (-1)*$b);
  }
  
  function dividir($a, $b) {
    $resultado = 0;
    $signo=1;
    if(($a>0 and $b>0) or ($a<0 and $b<0)){
      $signo =1;
      $a = abs($a);
      $b = abs($b);
    } else {
      $a = abs($a);
      $b = abs($b);
      $signo =(-1);
    }
        
    while(($a - $b) >= 0) {
      $a = $a - $b;
      
      $resultado = $resultado + 1;
    }
    if($signo == -1){
      return (-1)*$resultado;
    }else{
      return $resultado;
    }
    
  }

  function multiplicar($a, $b) {
    $resultado = 0;
    $signo = 1;
    if(($a>0 and $b>0) or ($a<0 and $b<0)){
      $signo =1;
      $a = abs($a);
      $b = abs($b);
    } else {
      $a = abs($a);
      $b = abs($b);
      $signo =(-1);
    }
        
    while ($b>0) {
      $resultado = $resultado+$a;
      $b = $b-1;
    }
    if($signo == -1){
      return (-1)*$resultado;
    }else{
      return $resultado;
  }

}
}