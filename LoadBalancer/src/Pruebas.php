<?php

namespace LB;
include("../vendor/autoload.php");

$decorado = new \LB\Decoradores\Decorador(new \LB\Servers\ServerOk("server1"));
echo $decorado->call();
echo $decorado->getCount();