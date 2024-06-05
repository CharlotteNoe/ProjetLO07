<?php
require_once 'Charte.class.php';
include 'WebBean.interface.php';
class Module implements WebBean {
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    private $listeErreurs = array();
    
    function getSigle() {
        return $this->sigle;
    }

    function getLabel() {
        return $this->label;
    }

    function getEffectif() {
        return $this->effectif;
    }
    
    function getCategorie() {
        return $this->categorie;
    }

    function setSigle($sigle): void {
        $this->sigle = $sigle;
    }

    function setLabel($label): void {
        $this->label = $label;
    }
    
    function setCategorie($categorie): void {
        $this->categorie = $categorie;
    }
    
    function setEffectif($effectif): void {
        $this->effectif = $effectif;
    }

    /*function __construct($sigle, $label, $categorie, $effectif) {
        echo ">>classe Module : construct ($sigle, $label, $categorie, $effectif) <br />\n";
        $this->setSigle($sigle);
        $this->setLabel($label);
        $this->setEffectif($effectif);
        $this->setCategorie($categorie);
    }*/
    function __construct(){
        echo ">> classe Module : construct () <br />\n";
        /*$this->sigle = $sigle;
        $this->label = $label;
        $this->categorie = $categorie;
        $this->effectif = $effectif;*/
    }
    

    


    function __toString(): string {
        return "Module ($this->sigle,$this->label,$this->effectif,$this->categorie)<br />\n";
    }
    
    function valide() {
        $resultat = true;
        $sigle = filter_input(INPUT_GET, "sigle", FILTER_SANITIZE_SPECIAL_CHARS);
        if (strlen($sigle)==0){
            $resultat = false;
            $this->listeErreurs["sigle"]= "Sigle n'est pas défini.";
        }
        return $resultat;
    }
    
    public function pageKO() {
        echo Charte::html_head_bootstrap5("Titre");
        echo ("<h2>Votre formulaire n'est pas correct</h2>");
        foreach ($_GET as $key => $value) {
            echo ("$key => $value <br />\n");
        }
        echo Charte::html_foot_bootstrap5();
    }
    
    public function pageOK() {
        echo Charte::html_head_bootstrap5("Titre");
        echo ("<h2>Votre formulaire est correct</h2>");
        foreach ($_GET as $key => $value) {
            echo ("$key => $value <br />\n");
        }
    }
    
    public function sauveTXT() {
        $resultat = $this->sigle . ";";
        $resultat .= $this->label . ";";
        $resultat .= $this->categorie . ";";
        $resultat .= $this->effectif . ";";
        return $resultat;
    }
    
    public function sauveXML($file) {
        return "xml";
    }
    
    public function sauveBDR($table) {
        $resultat = "insert into " . $table . " values (";
        $resultat .= "'" . $this->sigle . "',"; 
        $resultat .= "'" . $this->label . "',"; 
        $resultat .= "'" . $this->categorie . "',"; 
        $resultat .= "'" . $this->effectif . "')"; 
        return $resultat;
    }
    
    public function createTable($table) {
        $sql = "CREATE TABLE IF NOT EXISTS '$table' (
            'sigle' VARCHA(6) NOT NULL,
            'categorie' VARCHAR(2) CHECK (categorie IN ('CS','TM','EC','ME','CT'),
            'label VARCHAR(40) NOT NULL,
            'effectif' INTEGER,
            PRIMARY KEY ('sigle')
            )";
        return $sql;
    }
}

