<?php
session_start();
include_once("TE.php");

$formulario = new TemplateEngine("index.html");
echo $formulario->render();







            