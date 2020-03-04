<?php
include_once("Ahorcado.php");
session_start();

if(empty($_SESSION["letras"])){

    $_SESSION["letras"] = array();
}

$_SESSION["letras"][]= $_GET["letra"];

$ahorcado = new Ahorcado($_SESSION["palabra"],5);

foreach($_SESSION["letras"] as $key => $letra){
    
    $ahorcado->jugar($letra);
   
}
echo $ahorcado->mostrar();
echo"<br>";
?>
<a href = "./jugar.php?letra=a">a</a>
<a href = "./jugar.php?letra=b">b</a>
<a href = "./jugar.php?letra=c">c</a>
<a href = "./jugar.php?letra=d">d</a>
<a href = "./jugar.php?letra=e">e</a>
<a href = "./jugar.php?letra=f">f</a>
<a href = "./jugar.php?letra=g">g</a>
<a href = "./jugar.php?letra=h">h</a>
<a href = "./jugar.php?letra=i">i</a>
<a href = "./jugar.php?letra=j">j</a>
<a href = "./jugar.php?letra=k">k</a>
<a href = "./jugar.php?letra=l">l</a>
<a href = "./jugar.php?letra=m">m</a>
<a href = "./jugar.php?letra=n">n</a>
<a href = "./jugar.php?letra=o">o</a>
<a href = "./jugar.php?letra=p">p</a>
<a href = "./jugar.php?letra=q">q</a>
<a href = "./jugar.php?letra=r">r</a>
<a href = "./jugar.php?letra=s">s</a>
<a href = "./jugar.php?letra=t">t</a>
<a href = "./jugar.php?letra=u">u</a>
<a href = "./jugar.php?letra=v">v</a>
<a href = "./jugar.php?letra=w">w</a>
<a href = "./jugar.php?letra=x">x</a>
<a href = "./jugar.php?letra=y">y</a>
<a href = "./jugar.php?letra=z">z</a>

