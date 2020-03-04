<?php

/**
 * Buenas, la actividad de hoy es hacer una sola clase con sus tests correspondientes.
 *
 * Esto va a ser parte de la actividad de mañana por lo cual empiecen un proyecto nuevo
 * llamado Blogs e instalen composer y el resto, como ya saben. Tienen que configurar el ps4
 * con el namespace del proyecto Blogs y las carpetas correspondientes.
 * 
 * La clase se va a llamar FileStore y la idea es que nosotros le damos un nombre de
 * archivo en el constructor y después guardamos o leemos la información del archivo.
 *
 * Por ej.:
 *
 * $usuarios = array("dario", "harold", "tom");
 * $archivo = new FileStore("lista_de_usuarios.data");
 * $archivo->save($usuarios);
 * 
 * Esto no guardaría en el archivo lista_de_usuarios.data todos los usuarios que estaban
 * en el arreglo, un usuario por linea.
 *
 * Para leer sería:
 *
 * $archivo = new FileStore("lista_de_usuarios.data");
 * $usuarios = $archivo->read();
 *
 * Y ahora usuarios debería tener la información que teníamos antes en el arreglo.
 *
 *
 * Funciones útiles para hacer esto:
 * 
 *    - https://www.php.net/manual/en/function.file-get-contents.php
 *    - https://www.php.net/manual/en/function.file-put-contents.php
 *    - https://www.php.net/manual/en/function.implode
 *    - https://www.php.net/manual/en/function.explode.php
 *
 * En español para el que no lea en ingles:
 *
 *    - https://www.php.net/manual/es/function.file-get-contents.php
 *    - https://www.php.net/manual/es/function.file-put-contents.php
 *    - https://www.php.net/manual/es/function.implode
 *    - https://www.php.net/manual/es/function.explode.php
 *
 */