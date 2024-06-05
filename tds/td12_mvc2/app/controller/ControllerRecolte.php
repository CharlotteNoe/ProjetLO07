
<!-- ----- debut ControllerRecolte -->
<?php

require_once '../model/ModelRecolte.php';

class ControllerRecolte {
 public static function recolteReadAll() {
     $results= ModelRecolte::getAll();
     
     include 'config.php';
     $vue = $root . '/app/view/recolte/viewAll.php';
     require ($vue);
 }
 
 public static function recolteReadInfo(){
     $vins = ModelRecolte::getAllVin();
     $producteurs = ModelRecolte::getAllProducteur();
     include 'config.php';
     $vue = $root . '/app/view/recolte/viewInfo.php';
     require ($vue);
 }
 
 
  public static function recolteInsert() {
  $vin_id = $_GET['vin_id'];
  $producteur_id = $_GET['producteur_id'];
  $quantite = $_GET['quantite'];
  $results = ModelRecolte::insertOrUpdate($vin_id, $producteur_id, $quantite);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInsertedorUpdated.php';
  require ($vue);
 }


 
}
?>
<!-- ----- fin ControllerRecolte -->


