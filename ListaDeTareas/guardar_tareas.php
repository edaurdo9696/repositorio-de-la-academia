<?php

session_start();

$_SESSION['tareas'] [$_POST['Titulo']] = $POST['Mensaje'];



?>
<html>
    <head>
        Lista De Tareas
    </head>
        <body>
            <a href="./ListaDeTareas.php?">Lista</a>
            
        </body>


</html>
