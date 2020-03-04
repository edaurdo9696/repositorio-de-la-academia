<?php

class Router{
    
    private $rutas = array();
    public function addRoute(string $regex, $target){
        if(empty($this->rutas["#".$regex."#"])){
            $this->rutas["#".$regex."#"] = $target;
            return True;
        }else{
            return False;
        }
        

    }
    public function match($path){
        foreach($this->rutas as $regex=>$target){
            $r = preg_match_all($regex,$path);
            if($r>0){
                return $target;
            }
            
        }
        return null;
    }

}

