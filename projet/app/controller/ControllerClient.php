
<!-- ----- debut ControllerClient -->
<?php
require_once '../model/ModelBanque.php';
require_once '../model/ModelPersonne.php';
require_once '../model/ModelCompte.php';
require_once '../model/ModelResidence.php';



class ControllerClient {
    
 // Affiche la liste de tous les comptes du client
 public static function clientReadAllCompte(){
     $results = ModelCompte::getAllCompte($_SESSION['login']);
     include 'config.php';
     $vue = $root . '/app/view/client/viewAllCompte.php';
     require ($vue);
 }
 
 // Affiche un formulaire pour créer un compte
 public static function clientCompteCreate(){
     $results = ModelBanque::getAll();
     include 'config.php';
     $vue = $root . '/app/view/client/viewInsert.php';
     require ($vue);
 }
 
 // Créer un nouveau compte
 public static function clientCompteCreated(){
     $results = ModelCompte::inserted(
             htmlspecialchars($_GET['label']), htmlspecialchars($_GET['montant']), htmlspecialchars($_GET['banque']),$_SESSION['login']
     );
     include 'config.php';
     $vue = $root . '/app/view/client/viewInserted.php';
     require ($vue);
 }
}
?>
<!-- ----- fin ControllerClient -->


