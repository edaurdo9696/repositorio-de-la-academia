<?php

namespace Blogs;

class FileStore{

    
    private $nombre;

    public function __construct(string $name){
        $this->nombre = $name;
        
    }
    public function save(array $usuarios){
        $string = trim(implode("\n",$usuarios));
        $resultado = file_put_contents($this->nombre, $string);
        if($resultado != false){
            return true;
        }
        return false;
    }
    public function read(){
        if(!file_exists($this->nombre)){
            file_put_contents($this->nombre,"");
        }
            $archivo = file_get_contents($this->nombre);
            $nuevoarray = explode("\n",$archivo);
            
            return $nuevoarray;

          

    }
}

     
    

 




