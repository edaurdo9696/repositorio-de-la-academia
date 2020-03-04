<?php

session_start();

?>

<html>
<head><title>Loguearse</title></head>
    <body>
    <h1> Loguearse </h1>
        <form action="login.php" method='Post'>
         <label>ingresar nombre<input type="text" name = 'nombre'></label><br>
            <label>ingresar clave<input type="text" name = 'clave'></label><br>
            <input type="submit" value = 'log'>
        </form>
    </body>
</html>

