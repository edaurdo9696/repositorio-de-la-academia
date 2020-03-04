<?php
/*function numImpares(){
    $i=1;
    while ($i < 20){
        

        echo($i);
        $i=$i+2;
    }
}
numImpares();


function numImparesConFor(){
for($i=1;$i<20;$i=$i+2)
echo($i);

}

numImparesConFor();

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


function numImpares(){
    $i=20;
    while ($i > 0){
        

        echo($i);
        $i=$i-2;
    }
}
numImpares();


function numImparesConFor(){
for($i=20;$i>0;$i=$i-1)
echo($i);

}

*/
/*foreach($arreglo as $k){
    echo"$k\n";
    
}

foreach(array_reverse($arreglo) as $k){
    echo"$k\n";
}
*/

/*$i=0;
while ($i<count($arreglo)){
    echo $arreglo[$i];
    $i=$i+1; 
}
$arreglo= array(1,2,3,4,5,6,7,8,9,10);
$arreglo=array_reverse($arreglo);
$i=0;
while($i<count($arreglo)){
    echo $arreglo[$i];
    $i=$i+1;

}
for($i=0;$i<count($arreglo);$i=$i+1){
    echo $arreglo[$i];
}

$arreglo = array();
$i=0;
while ($i<1000){
    $arreglo[$i]=0;
    $i=$i+1;
}
print_r($arreglo);

$arreglo = array();
$i=0;
while ($i<200){
    $arreglo[$i]=0;
    $i=$i+2;

}
print_r($arreglo);
print_r(count($arreglo));
*/

//se recorre con un Foreach.

/*function ej4_a($ar){
    foreach($ar as $k=>$v){
        $ar[$k]=$v*2;
        
        
    }
    return $ar;
    

}
$ar = array(1, 2, 3);
$res=ej4_a($ar);
print_r($res);

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
*/
/*function funcionRecursiva($edad){

    echo $edad;

    if($edad>0){

        funcionRecursiva(++$edad);
    }
}
    
funcionRecursiva(10);
*/
/*function f1( $var1 ) {
    if ($var1 > 1){
      return $var1 * f2($var1 - 1);
    }
    return $var1;
  }
  function f2( $var2 ) {
    if ($var2 > 1){
      return $var2 * f1($var2 - 1);
    }
    return $var2;
  }
$res = f1(4);
print_r($res);

//lo que hace es dar una secuencia de numeros los cuales se multiplican con el resultado de la multiplicacion anterior del numero anterior.
*/

$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $k=>$v) {
  echo $k . "\n";
}
echo "\n\n";
// duplico todos los elementos sin agregar nuevos
foreach ($b as $k=>$v) {
  $b[$k] = $v*2;
}
print_r($b);
foreach ($a as $k=>$v) {
    $a[$k] = $v*2;
}
print_r($a);


