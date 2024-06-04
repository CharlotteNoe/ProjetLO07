
<!-- ----- debut ControllerVin -->
<?php
require_once '../model/ModelProducteur.php';

if (!defined('DEBUG')) {
    define('DEBUG', FALSE);
}

class ControllerProducteur {
 
 // --- Liste des producteurs
 public static function producteurReadAll() {
  $results = ModelProducteur::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function producteurReadId($args) {
     if (DEBUG) echo ("ControllerProducteur::producteurReadId:begin</br>");
  $results = ModelProducteur::getAllId();

  $target=$args['target'];
  if (DEBUG) echo ("ControllerProducteur:producteurReadId : target = $target</br>");
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewId.php';
  require ($vue);
 }

 // Affiche un vin particulier (id)
 public static function producteurReadOne() {
  $producteur_id = $_GET['id'];
  $results = ModelProducteur::getOne($producteur_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  require ($vue);
 }
 
 public static function producteurDeleted() {
     $vin_id = $_GET['id'];
     $results = ModelProducteur::delete($vin_id);
     
     include 'config.php';
     $vue = $root . '/app/view/producteur/viewDeleted.php';
     require ($vue);
 } 

 // Affiche le formulaire de creation d'un producteur
 public static function producteurCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau producteur.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function producteurCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelProducteur::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInserted.php';
  require ($vue);
 }
 
 // --- Liste sans doublons des régions
 public static function producteurReadregion() {
  $results = ModelProducteur::getRegionSD();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewRegion.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }


// --- Nombre de producteur par region
 public static function producteurReadNbProducteur() {
  $results = ModelProducteur::getNbProducteur();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewNbProducteur.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }
}
?>
<!-- ----- fin ControllerProducteur -->


