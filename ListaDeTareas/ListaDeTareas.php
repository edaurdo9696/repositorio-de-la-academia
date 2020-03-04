<?php

session_start();




echo "<h1>Tareas</h1>";


foreach($_SESSION['tareas'] as $titulo=>$mensaje){
    echo '<a href="./ver.php?Titulo='.$titulo.'">'.$titulo.'</a>.<br>';

}


    
echo"<h2><a href='./crear.html?'>Crear Nueva</a></h2>";



    
