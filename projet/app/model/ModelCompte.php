
<!-- ----- debut ModelCompte -->

<?php
session_start();
require_once 'Model.php';

class ModelCompte {
 private $id, $label, $montant, $banque_id, $personne_id;

 // pas possible d'avoir 2 constructeurs
 public function __construct($id = NULL, $label = NULL, $montant = NULL, $banque_id = NULL, $personne_id = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->label = $label;
   $this->montant = $montant;
   $this->banque_id = $banque_id;
   $this->personne_id = $personne_id;
  }
 }

 function setId($id) {
     $this->id = $id;
 }

 function setLabel($label) {
     $this->label = $label;
 }

 function setMontant($montant) {
     $this->montant = $montant;
 }

 function setBanque_id($banque_id) {
     $this->banque_id = $banque_id;
 }

 function setPersonne_id($personne_id) {
     $this->personne_id = $personne_id;
 }

 function getId() {
     return $this->id;
 }

 function getLabel() {
     return $this->label;
 }

 function getMontant() {
     return $this->montant;
 }

 function getBanque_id() {
     return $this->banque_id;
 }

 function getPersonne_id() {
     return $this->personne_id;
 }

 
 
 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "SELECT P.nom, P.prenom, B.label as banque_label, B.pays, C.label as compte_label, C.montant from compte as C, banque as B, personne as P where C.banque_id=B.id and C.personne_id=P.id";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 
 public static function getAllCompte($login) {
  try {
   $database = Model::getInstance();
   $query = "SELECT C.label as compte_label, C.montant, B.label as banque_label FROM compte as C, banque as B, personne as P WHERE C.banque_id=B.id and C.personne_id=P.id and P.login=:login";
   $statement = $database->prepare($query);
   $statement->execute(['login' => $login]);
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 
 public static function inserted($label, $montant, $banque_id, $client_login){
  try {
   $database = Model::getInstance();   
   $query = "select max(id) from compte";
   $statement = $database->query($query);
   $tuple = $statement->fetch();
   $id = $tuple['0'];
   $id++;

   $query = "select id from personne where login=:client_login";
   $statement = $database->prepare($query);
   $statement->execute(['client_login' => $client_login]);
   $results = $statement->fetch();
   $client_id = $results['0'];
    
   $query = "insert into compte value (:id, :label, :montant, :banque_id, :client_id)";
   $statement = $database->prepare($query);
   $statement->execute([
       'id' => $id,
       'label' => $label,
       'montant' => $montant,
       'banque_id' => $banque_id,
       'client_id' => $client_id
   ]);
   return $id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }   
 }
 
 public static function getSumCompte($client_id) {
     try {
   $database = Model::getInstance();
   $query = "SELECT SUM(montant) as total_compte from compte where personne_id=:client_id";
   $statement = $database->prepare($query);
   $statement->execute(['client_id' => $client_id]);
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
}
?>
<!-- ----- fin ModelBanque -->
