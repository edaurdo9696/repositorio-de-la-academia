<?php


namespace Blogs;

class Login{
    public function mostrar(){
        $bl = new \Blogs\UserService;
        $us = $bl->getAllUsers();
        
        foreach($us as $nombre){
            if($_POST['nombre']==$nombre){
                $_SESSION['logueado']= true;
            }
        }
        
        if($_SESSION['logueado'] == true){
            return "logueado
             <br>
             <a href='index.php?page=posts'>posteos</a>";
        }else{
            return 'usuario invalido <a href="index.php?page=register">Reintentar</a>';
        }    


    }

} 