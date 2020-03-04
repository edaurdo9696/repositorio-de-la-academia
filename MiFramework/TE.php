<?php

class TE{
    private $arreglo = array();
    private $strcopy;
    private $str;
    
    public function __construct($te){
        $this->str = file_get_contents($te);
        $this->strcopy = $this->str;
    } 
    public function addVariable($palabra1,$palabra2){
        $this->arreglo[$palabra1] = $palabra2;
    }
    public function render(){
        foreach($this->arreglo as $palabra1=>$palabra2){
            $this->strcopy = str_replace($palabra1,$palabra2,$this->strcopy);
        }
        $variableAuxiliar = "";
        $verdad = true;
        for($i=0;$i<strlen($this->strcopy);$i=$i+1){
            if($this->strcopy[$i] == "{" and $this->strcopy[$i-1] == "{"){
                $verdad = false;
            }
            if($this->strcopy[$i] == "}" and $this->strcopy[$i+1] == "}"){
                $verdad = true;
            }
            if($verdad and $this->strcopy[$i] != "{" and $this->strcopy[$i]!="}"){
                $variableAuxiliar.=$this->strcopy[$i];
            }
            
        }
        return $variableAuxiliar;
    }
    public function PalabrasClave(){
        $contador = 0;
        $arreglo = array();
        $variableAuxiliar = "";
        $palabra = false;
        for($i=2;$i<strlen($this->strcopy);$i=$i+1){
            if($this->strcopy[$i-2] == "{" and $this->strcopy[$i-1] == "{"){
                $palabra = true;
            }
            if($this->strcopy[$i] == "}" and $this->strcopy[$i+1] == "}"){
                $palabra = false;
                $arreglo[] = $variableAuxiliar;
                $variableAuxiliar = "";
                $contador++;

            }
            if($palabra){
                $variableAuxiliar.=$this->strcopy[$i];
            }
            
        }
    return $arreglo;
    }
    
            

}




$te = new TE("ejemploDeTexto.template");
$te->addVariable("Hello","hola");
echo $te->render();
print_r ($te->PalabrasClave());



