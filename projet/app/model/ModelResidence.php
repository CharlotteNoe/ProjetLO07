<!-- ----- debut ModelCompte -->

<?php
require_once 'Model.php';

class ModelResidence
{
    private $id, $label, $ville, $prix, $personne_id;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $label = NULL, $ville = NULL, $prix = NULL, $personne_id = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->ville = $ville;
            $this->prix = $prix;
            $this->personne_id = $personne_id;
        }
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setLabel($label)
    {
        $this->label = $label;
    }

    function setVille($ville)
    {
        $this->ville = $ville;
    }

    function setPrix($prix)
    {
        $this->prix = $prix;
    }

    function setPersonne_id($personne_id)
    {
        $this->personne_id = $personne_id;
    }

    function getId()
    {
        return $this->id;
    }

    function getLabel()
    {
        return $this->label;
    }

    function getVille()
    {
        return $this->ville;
    }

    function getPrix()
    {
        return $this->prix;
    }

    function getPersonne_id()
    {
        return $this->personne_id;
    }


    public static function getAll()
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT P.nom, P.prenom, R.label, R.ville, R.prix from residence as R, personne as P where R.personne_id=P.id;";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAllResidence($login)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT R.label as residence_label, R.prix, R.ville from residence as R, personne as P where R.personne_id=P.id and P.login=:login";
            $statement = $database->prepare($query);
            $statement->execute(['login' => $login]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAllResidenceSaufLogin($login)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT R.id, R.label, R.ville from residence as R, personne as P where R.personne_id=P.id and P.login<>:login";
            $statement = $database->prepare($query);
            $statement->execute(['login' => $login]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    public static function getInfoResidence($id)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT prix, personne_id from residence where id=:id";
            $statement = $database->prepare($query);
            $statement->execute(['id' => $id]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    
     public static function transfertResidence($login, $id_residence)
    {
        try {
            $database = Model::getInstance();
            try {
                $database->beginTransaction();
                $query1 = "UPDATE residence SET personne_id = (SELECT id from personne where login=:login) where id=:id_residence";
                $statement1 = $database->prepare($query1);
                $statement1->execute([
                    'login' => $login,
                    'id_residence'=>$id_residence
                    ]);
                $database->commit();
                return true;
                

                
            } catch (PDOException $e) {
                $database->rollBack();
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                return false;
            }
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return false;
        }
    }
    
     public static function getSumResidence($client_id) {
        try {
            $database = Model::getInstance();
            $query = "SELECT SUM(prix) as total_residence from residence where personne_id=:client_id";
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
<!-- ----- fin ModelResidence -->
