<?php
session_start();
include_once("../lib/TE.php");

$formulario = new TemplateEngine("../templates/paginaPrincipal.html");
echo $formulario->render();







            