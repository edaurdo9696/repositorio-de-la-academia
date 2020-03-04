<?php
function generar_bosque_vacio($n){	
    $bosque=array();
    $i=0;

    while ($i <= $n){
    $bosque= array_push($bosque,0);

        $i=$i+1;
    }
}
    return $bosque
  
	
function suceso_aleatorio($prob) {
    $res= random._int(0,100);
    if ($res < $prob){
        return True;
    }
    }else{
       
        return False;
    }


$prob=suceso_aleatorio(0.6);
print($prob)	

function brotes($n, $p){
    $bosq=generar_bosque_vacio($n);
    $i=0;
    while $i < $n{
        if suceso_aleatorio($p)==True and bosq[$i]==0{
            $bosq[$i]=1
        
        $i=$i+1
        
    return bosq
$re=brotes(100,0.6)
print($re)