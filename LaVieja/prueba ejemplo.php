<?php
/**
 * =====================================
 * 1 - Cuanto vale $a en los tres casos:
 * =====================================
 */
//a
$a = 10;
function ej1_a() {
  $a = 11;

}
ej1_a();
//cuanto vale a?
//a = 10;
//b
$b = 10;
function ej1_b() {
  global $b;
  $b = 11;
//$b = 11;
}
ej1_b();
//cuanto vale b?
//c
$c = 10;
function ej1_c() {
  $c = 11;
  global $c;
}
ej1_c();
//cuanto vale c? c vale 10
//d
$d = 10;
function ej1_d() {
  global $d;
  $d = 11;
}
//cuanto vale d? d vale 11
//e
$e = 11;
function ej1_e1() {
  ej1_e2();
  $e = 12;
}
function ej1_e2() {
  global $e;
}
ej1_e1();
//cuanto vale $e? e vale 11
/**
 * =====================================
 * 2 - imprimir secuencias con bucles
 * =====================================
 */
//a - Escribir un bucle for y un while donde se
//    imprimen solo los valores impares desde 0 a 20
//b - Igual al punto a pero en orden inverso salteando de a uno
//    (imprime la mitad de numeros)
//c - Crear un arreglo de 10 elementos y recorrerlo
//    con un foreach en ambos sentidos
//    (hint: puede usar funciones de array antes de entrar al foreach)
//d - Crear un arreglo de 10 elementos y recorrerlo de ambos sentidos
//    con un for y un while
/**
 * =====================================
 * 3 - Arreglos
 * =====================================
 */
//a - Crear un arreglo de una dimensión de mil elementos
//    con claves consecutivas
//b - Crea un arreglo de 100elementos con claves numericas pero pares
//    Ej: $a[0], $a[2], $a[3] deben existir, $a[1], $a[3] no deben existir
//c - Si nos pasan un arreglo y no sabemos el contenido, cual suele ser la mejor
//    forma de recorrerlo? Se puede de más formas?
 
/**
 * =====================================
 * 4 - funciones
 * =====================================
 */
//a - Crear una funcion que dado un arreglo/array duplica todos los valores
$ar = array(1, 2, 3);
ej4_a($ar); // tiene que modificar todos los valores y duplicarlos
//b - Crea una funcion que dado un arreglo/array te devuelve un nuevo arreglo
//    con los valores duplicados pero no modifica el original (debe crear un
//    nuevo arreglo)
$ar = array(1, 2, 3);
$newArray = array();
createNewArray($ar, $newArray);
//c - De un ejemplo de función recursiva
//d - En este psuedo codigo, puede decirme si anda si lo programaramos en PHP?
//    Que devuelve? Que estamos calculando?
/**
f1( $var1 ) {
  if $var1 > 1{
    return $var1 * f2($var1 - 1)
  }
  return $var1
}
f2( $var2 ) {
  if $var2 > 1{
    return $var2 * f1($var2 - 1)
  }
  return $var2
}
f1(5) // cuanto devuelve?
      // que esta calculando?
*/
/**
 * =====================================
 * 5 - A desarrollar
 * =====================================
 */
//a - Arregle el siguiente codigo
$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $v) {
  echo $v . "\n";
}
echo "\n\n";
// duplico todos los elementos sin agregar nuevos
foreach ($b as $v) {
  $b[$v] = $v*2;
}