<?php


namespace Blogs;

class Login{
    public function mostrar(){
         
        $usuarios = array("Eduardo"=>"academia","Matias"=>"global","Tom"=>"hitts");
        
        foreach($usuarios as $nombre=>$clave){
            if($_POST['nombre']==$nombre && $_POST['clave']==$clave){
                $_SESSION['logueado']= true;
            }
        }
        
        if($_SESSION['logueado'] == true){
            return "logueado
             <br>
             <a href='index.php?page=lista_productos'>productos</a>";
        }else{
            return 'usuario invalido <a href="index.php?page=paginaPrincipal">Reintentar</a>';
        }    


    }

} 
