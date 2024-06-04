
<!-- ----- debut ModelRecolte -->

<?php
require_once 'Model.php';

class ModelRecolte {
 private $producteur_id, $vin_id, $quantite;

 // pas possible d'avoir 2 constructeurs
 //public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
 /* if (!is_null($id)) {
   $this->id = $id;
   $this->nom = $nom;
   $this->prenom = $prenom;
   $this->region = $region;
  }
 }*/

 function setId($id) {
  $this->id = $id;
 }

 function setNom($nom) {
  $this->nom = $nom;
 }

 function setPrenom($prenom) {
  $this->prenom = $prenom;
 }

 function setRegion($region) {
  $this->region = $region;
 }

 function getId() {
  return $this->id;
 }

 function getNom() {
  return $this->nom;
 }

 function getPrenom() {
  return $this->prenom;
 }

 function getRegion() {
  return $this->region;
 }
 
 
// retourne une liste des id
 public static function getAll() {
  try {
      
      $database = Model::getInstance();
      //$query = "select region, cru, annee, degre, nom, prenom, quantite from vin, producteur, recolte where recolte.vin_id=vin.id and recolte.producteur_id=producteur.id order by region";
      
      $query = "select vin.id, producteur.id, region, cru, nom, prenom, quantite from vin,producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id = producteur.id order by vin.id, producteur_id";  
      
   $statement = $database->prepare($query);
   $statement->execute();
   $datas = $statement->fetchAll(PDO::FETCH_ASSOC);
   $cols = array_keys($datas[0]);
   return array($cols, $datas);
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function insertOrUpdate($vin_id, $producteur_id, $quantite){
     try {
        $database = Model::getInstance();
        $query = "select * from recolte where vin_id = :vin_id and producteur_id = :producteur_id";
        $statement = $database->prepare($query);
        $statement->execute(['vin_id' => $vin_id, 'producteur_id' => $producteur_id]);
        $recolte = $statement->fetch(PDO::FETCH_ASSOC);
        
        if ($recolte){
            $query = "update recolte set quantite = :quantite where vin_id = :vin_id and producteur_id = :producteur_id";
        }
        else {
            $query = "insert into recolte (vin_id, producteur_id, quantite) values (:vin_id, :producteur_id, :quantite)";
        }
        $statement = $database->prepare($query);
        $statement->execute([
            'vin_id' => $vin_id, 
            'producteur_id' => $producteur_id, 
            'quantite' => $quantite
        ]);
        if ($recolte){
            return 'update';
        }
        else {
            return 'insert';
        }
     } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
     }
 }
 
 public static function getAllVin() {
  try {
   $database = Model::getInstance();
   $query = "select * from vin";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getAllProducteur() {
  try {
   $database = Model::getInstance();
   $query = "select * from producteur";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 } 


}
?>
<!-- ----- fin ModelRecolte -->
