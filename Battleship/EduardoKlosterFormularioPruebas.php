<?php

$a = 10;
function ej1_a() {
  $a = 11;
}

ej1_a();
echo"$a\n";


$b = 10;
function ej1_b() {
  global $b;
  $b = 11;
}
  ej1_b();
echo"$b\n";

$c = 10;
function ej1_c() {
  $c = 11;
  global $c;
}

ej1_c();
echo"$c\n";

$d = 10;
function ej1_d() {
  global $d;
  $d = 11;
}

ej1_d();
echo"$d\n";

$e = 11;
function ej1_e1() {
  ej1_e2();
  $e = 12;
}
function ej1_e2() {
  global $e;
}
ej1_e1();
echo"$e\n";

for($i=0;$i<2;$i++) {
}
echo "$i\n";


function ej2_a(){
    $i=19;
    while ($i > 0){
        

        echo($i);
        $i=$i-2;
    }
}
ej2_a();

function ej2_aConFor(){
    for($i=19;$i>0;$i=$i-2){
    echo($i);

    }
    
}
ej2_a();

function ej2_b(){
    $i=1;
    while ($i < 20){
        

        echo($i);
        $i=$i+2;
    }
}
ej2_b();

function ej2_bConFor(){
    for($i=1;$i<20;$i=$i+2){
    echo($i);

    }
    
}
ej2_bConFor();

function ej2_cReversa(){
    $arreglo = array(1,5,44,8,96,52,11,32,64,75);
    foreach(array_reverse($arreglo) as $k){
    echo"$k\n";

    }
}
ej2_cReversa();
function ej2_c(){
    $arreglo = array(1,5,44,8,96,52,11,32,64,75);
    foreach(($arreglo) as $k){
    echo"$k\n";

    }
}
ej2_c();

function ej2_dWhile(){
    $arreglo = array(1,5,44,8,96,52,11,32,64,75);
    $i=0;
        while($i<count($arreglo)){
        echo $arreglo[$i];
        $i=$i+1;
        }
}
ej2_dWhile();


function ej2_dWhileReversa(){
    $arreglo = array(1,5,44,8,96,52,11,32,64,75);
    $arreglo=array_reverse($arreglo);
    $i=0;
        while($i<count($arreglo)){
        echo $arreglo[$i];
        $i=$i+1;
        }
}
ej2_dWhileReversa();

function ej2_dFor(){
    $arreglo = array(1,5,44,8,96,52,11,32,64,75);
    for($i=0;$i<count($arreglo);$i=$i+1){
        echo $arreglo[$i];
    }
}

ej2_dFor();

function ej2_dForReversa(){
    $arreglo = array(1,5,44,8,96,52,11,32,64,75);
    $arreglo=array_reverse($arreglo);
    for($i=0;$i<count($arreglo);$i=$i+1){
        echo $arreglo[$i];
    }
}

ej2_dForReversa();


//ej3_a
$arreglo = array();
$i=0;
while ($i<1000){
    $arreglo[$i]=0;
    $i=$i+1;
}
print_r($arreglo);

//ej3_b

$arreglo = array();
$i=0;
while ($i<200){
    $arreglo[$i]=0;
    $i=$i+2;

}
print_r($arreglo);
print_r(count($arreglo));

//ej3_c
La mejor forma de recorrer el contenido de un arreglo cuando no sabemos el contenido
es por medio de un foreach. 


//ej3_d
$tablero =array();
for($i=0;$i<10;$i+1){
    $tablero[$i]=0;
    for($j=0;$j<10;$j+1){
        $tablero[$i][$j]=0;

    }
}
//ej3_e
//si se puede crear.
$arreglo = array();
$i=0;
while ($i<10){
$arreglo[$i]= 0;
    $j=0;
    while ($j<10){
        $arreglo[$i][$j]= 0;
        $k=0;
        while ($k<10){
            $arreglo[$i][$j[$k]]= 0;
        $k=$k+1;
        }
    $j=$j+1;    
    }
$i=$i+1;
}

//ej4_a
$ar = array(1, 2, 3);
function ej4_a($ar){
    foreach($ar as $k=>$v){
        $ar[$k]=$v*2;
        
        
    }
    return $ar;
}
//ej4_b
function createNewArray($ar, $newArray){
    
    foreach($ar as $k=>$v){
        $newArray[$k]=$v*2;

    }
return $newArray;
}
$ar = array(1, 2, 3);
$newArray = array();
$res=createNewArray($ar,$newArray);
print_r($res);

//ej4_c
    function recursiva_fibonacci($n){
    
        if ($n>1){
           return fibonacci($n-1) + fibonacci($n-2);
        }
        else if ($n==1) {  
            return 1;
        }
        else if ($n==0){ 
            return 0;
        }
        else{ 
            return -1; 
        }
    }


//ej4_d
//si funciona. Lo que nos devolveria seria una funcion factorial, es decir que 
//va multiplicando cada numero de cada posicion con el resultado de la multiplicacion
//anterior.

$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $k=>$v) {
  echo $a[$k] . "\n";
}
echo "\n\n";
// duplico todos los elementos sin agregar nuevos
foreach ($b as $k=>$v) {
  $b[$k] = $v*2;
}

//Teorico
//El TDD sirve para testear codigos y lograr chekear si el codigo funciona. La idea es que
//cada test nos de un error, para luego tener que crear/solucionar el codigo de la clase y
// al finalizar el proyecto garantizarce asi el buen funcionamiento.

