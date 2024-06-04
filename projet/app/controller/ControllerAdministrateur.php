
<!-- ----- debut ControllerAdministrateur -->
<?php
require_once '../model/ModelBanque.php';
require_once '../model/ModelPersonne.php';
require_once '../model/ModelCompte.php';
require_once '../model/ModelResidence.php';


class ControllerAdministrateur {
    
 // Affiche la liste de toute les banques   
 public static function administrateurReadAllBanque(){
     $results = ModelBanque::getAll();
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewAllBanque.php';
     require ($vue);
 }

 // Affiche un formulaire pour ajouter une banque
 public static function administrateurBanqueCreate() {
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewInsert.php';
     require ($vue);
 }
 
 // Ajoute une banque
 public static function administrateurBanqueCreated(){
     $results = ModelBanque::insert(
             htmlspecialchars($_GET['label']), htmlspecialchars($_GET['pays'])
     );
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewInserted.php';
     require ($vue);
 }
 
 // Affiche un formulaire avec toute les banques
 public static function administrateurReadBanque(){
     $results = ModelBanque::getAll();
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewBanque.php';
     require ($vue);
 }
 
 // Affiche tous les comptes qui correspondent à la banque choisie
 public static function administrateurReadCompte(){
     $banque_id = $_GET['banque'];
     $results = ModelBanque::getOneBanque($banque_id);
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewCompteBanque.php';
     require ($vue);
 }
 
 // Affiche la liste de tous les clients
 public static function administrateurReadAllClient(){
     $results = ModelPersonne::getAllClient();
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewAllPersonne.php';
     require ($vue);
 }

 // Affiche la liste de tous les administrateurs
 public static function administrateurReadAllAdministrateur(){
     $results = ModelPersonne::getAllAdministrateur();
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewAllPersonne.php';
     require ($vue);
 }

// Affiche la liste de tous les comptes
 public static function administrateurReadAllCompte(){
     $results = ModelCompte::getAll();
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewAllCompte.php';
     require ($vue);
 }

 // Affiche la liste de toutes les résidences
 public static function administrateurReadAllResidence(){
     $results = ModelResidence::getAll();
     include 'config.php';
     $vue = $root . '/app/view/administrateur/viewAllResidence.php';
     require ($vue);
 } 
}
?>
<!-- ----- fin ControllerAdministrateur -->


