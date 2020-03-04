<?php

session_start();



echo "<p>".$_SESSION['tareas'][$_GET['Titulo']]."</p>";

echo "<a href='./ListaDeTareas.php'>Volver a la Lista</a>";