<?php

namespace Library;

class TemplateEngine {
    private $file;
    private $variables = array();
    public $newFile;

    public function __construct($direccion){
        $this->file = file_get_contents($direccion);
        $this->newFile = file_get_contents($direccion);
    }

    public function addVariable($variable,$replace){
        $this->variables [$variable] = $replace;
    }

    public function contadorVariables(){
        $file2 = $this->file;
        $listaVariables = array();
        while(strpos($file2,"{{")!=False and strpos($file2,"}}")!=False){
            $needle1 = strpos($this->newFile,"{{");
            $needle2 = strpos($this->newFile,"}}");
            $listaVariables[] = substr($file2,$needle1+2,$needle2-$needle1);
            $file2 = substr_replace($file2,"",$needle1,$needle2-strlen($file2)+2);
        }
        return count($listaVariables);

    }

    public function render(){
        foreach($this->variables as $variable => $replace){
            $this->newFile = str_replace("{{".$variable."}}",$replace,$this->newFile);
        }
        while(strpos($this->newFile,"{{")!=False or strpos($this->newFile,"}}")!=False){
            $needle1 = strpos($this->newFile,"{{");
            $needle2 = strpos($this->newFile,"}}");
            $this->newFile = substr_replace($this->newFile,"",$needle1,$needle2-strlen($this->newFile)+2);
        }
        

        return $this->newFile;
    }

}


?>