<?php

class Cursus{
    private $listeModules;
    
    function getListeModules() {
        return $this->listeModules;
    }

    function setListeModules($listeModules): void {
        $this->listeModules = $listeModules;
    }

        
    public function __construct() {
        $this->listeModules = array();
    }
    
    public function addModule($module) {
        $sigle = $module->getSigle();
        $this->listeModules[$sigle]=$module;
        echo "addmodule : $module";
        
    }
    
    
    
    public function __toString() {
    $result = "Cursus Objet<br />\n(<br />\n";
    foreach ($this->listeModules as $sigle => $module) {
        $result .= "    [$sigle] => Module Objet <br />\n";
        $result .= "        ( <br />\n";
        $result .= "            [sigle:Module:private] => " . $module->getSigle() . "<br />\n";
        $result .= "            [label:Module:private] => " . $module->getLabel() . "<br />\n";
        $result .= "            [categorie:Module:private] => " . $module->getCategorie() . "<br />\n";
        $result .= "            [effectif:Module:private] => " . $module->getEffectif() . "<br />\n";
        $result .= "        ) <br />\n";
    }
    $result .= ")";
    return $result;
}

 
    
    public function affiche() {
        print_r($this->__toString());
    }
}
