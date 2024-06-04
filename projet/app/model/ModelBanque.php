
<!-- ----- debut ModelBanque -->

<?php
require_once 'Model.php';

class ModelBanque {
 private $id, $label, $pays;

 // pas possible d'avoir 2 constructeurs
 public function __construct($id = NULL, $label = NULL, $pays = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->label = $label;
   $this->pays = $pays;
  }
 }

 function setId($id) {
  $this->id = $id;
 }

 function setLabel($label) {
  $this->label = $label;
 }

 function setPays($pays) {
  $this->pays = $pays;
 }


 function getId() {
  return $this->id;
 }

 function getLabel() {
  return $this->label;
 }

 function getPays() {
  return $this->pays;
 }
 
 
 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select * from banque";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelBanque");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 
 public static function insert($label, $pays) {
     try{
         $database = Model::getInstance();
         $query = "select * from banque where label = :label";
         $statement = $database->prepare($query);
         $statement->execute([
             'label' => $label,
         ]);
         $banque = $statement->fetch(PDO::FETCH_ASSOC);
         
         if ($banque){
             return "existe";
         }
         else{
         $query = "select max(id) from banque";
         $statement = $database->query($query);
         $tuple = $statement->fetch();
         $id = $tuple['0'];
         $id++;
         
         $query = "insert into banque value (:id, :label, :pays)";
         $statement = $database->prepare($query);
         $statement->execute([
             'id' => $id,
             'label' => $label,
             'pays' => $pays
         ]);
         return $id;}
                 
     } catch (PDOException $e) {
         printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
         return -1;
     }
 }
 

 
 public static function getOneBanque($banque_id) {
  try {
   $database = Model::getInstance();
   $query = "select P.prenom, P.nom, B.label as banque_label ,C.label as compte_label , C.montant from personne as P, banque as B , compte as C where P.id=C.personne_id and C.banque_id=B.id and B.id= :banque_id ";
   $statement = $database->prepare($query);
   $statement->execute(['banque_id' => $banque_id]);
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 } 
 
}
?>
<!-- ----- fin ModelBanque -->
