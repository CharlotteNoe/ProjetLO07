<?php
ob_start();
require_once '../model/ModelBanque.php';
require_once '../model/ModelPersonne.php';
require_once '../model/ModelCompte.php';
require_once '../model/ModelResidence.php';
//require '../../outil/TCPDF/tcpdf.php';


class ControllerInnovation
{

    // Affiche un formulaire avec tout les client
     public static function innovationReadClient(){
     $results = ModelPersonne::getAllClient();
     include 'config.php';
     $vue = $root . '/app/view/innovation/viewPDF.php';
     require ($vue);
     }
     
     
    // Affiche une page pour télécharger le PDF
     public static function innovationPDF(){
         
     $client_id = $_GET['client'];
     
     $compte = ModelCompte::getSumCompte($client_id);
     $residence = ModelResidence::getSumResidence($client_id);
     $personne = ModelPersonne::getPrenomNom($client_id);
     $total= ModelPersonne::getSumClient($client_id);
     include 'config.php';
     $vue = $root . '/app/view/innovation/viewPDFCreate.php';
     require ($vue);
     }
     
     
     //Affiche la page présentant l'innovation MVC
    public static function InnovationMVC()
    {
        include 'config.php';
        $vue = $root . '/app/view/innovation/innovationMVC.php';
        require($vue);
    }

}

?>
<!-- ----- fin ControllerClient -->

