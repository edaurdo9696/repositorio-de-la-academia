<?php

session_start();

$_SESSION["palabra"] = $_POST["palabra"];
$_SESSION["intentos"] = $_POST["intentos"];
$_SESSION["letras"] = array();

?>
<html>
    <title>Ahorca2</title>
        <body>
            <a href="./jugar.php?">Jugar</a>
        </body>
</html>
