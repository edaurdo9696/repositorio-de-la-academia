<?php
class Billetera{
	private $billetes = array(2=>0, 5=>0, 10=>0, 20=>0, 50=>0, 100=>0, 200=>0, 500=>0 ,1000=>0);
	
	
	function agregarplata($billete,$cantidad){
		$this->billetes[$billete]=$this->billetes[$billete]+$cantidad;
			
	}
	function sacar_plata($billete, $cantiad){
		$this->billetes[$billete]=$this->billetes[$billete]-$cantidad;
	}

	function total(){
		$plata=0;
		foreach($this->billetes as $valor => $cantidad){
			$plata=$plata+$valor*$cantidad;
			
    	
		}
		return $plata;
		
    }

	function mostrar_plata(){
		$visibles=array();
		foreach($this->billetes as $valor =>$cantidad){
			if($cantidad != 0){
				$visibles[$valor]=$cantidad;	
			}	
		}
		return $visibles;
	}	
}
			        
		$mi_billetera=new Billetera();
        $mi_billetera->agregarplata(20,9);
		$mi_billetera->agregarplata(50,5);
		print_r($mi_billetera->total());
		print_r($mi_billetera->mostrar_plata());



	function hacer_mas_billeteras(){
		$billeteras_del_resto = array();
		$i=0
		while ($i<16){
			$billeteras_del_resto[$i]=new Billetera();
			$i=$i+1

		}
		return $billeteras_del_resto
		


		

			
		

	
	