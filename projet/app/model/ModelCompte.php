<!-- ----- debut ModelCompte -->

<?php
session_start();
require_once 'Model.php';

class ModelCompte
{
    private $id, $label, $montant, $banque_id, $personne_id;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $label = NULL, $montant = NULL, $banque_id = NULL, $personne_id = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->montant = $montant;
            $this->banque_id = $banque_id;
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

    function setMontant($montant)
    {
        $this->montant = $montant;
    }

    function setBanque_id($banque_id)
    {
        $this->banque_id = $banque_id;
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

    function getMontant()
    {
        return $this->montant;
    }

    function getBanque_id()
    {
        return $this->banque_id;
    }

    function getPersonne_id()
    {
        return $this->personne_id;
    }


    public static function getAll()
    {
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


    public static function getAllCompte($login)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT C.label as compte_label, C.montant, B.label as banque_label, C.id FROM compte as C, banque as B, personne as P WHERE C.banque_id=B.id and C.personne_id=P.id and P.login=:login";
            $statement = $database->prepare($query);
            $statement->execute(['login' => $login]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    public static function getAllCompteVendeur($id)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT  C.id, C.label as compte_label FROM compte as C WHERE C.personne_id=:id";
            $statement = $database->prepare($query);
            $statement->execute(['id' => $id]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getComptesLabels() {
        try {
            $database = Model::getInstance();
            $query = "SELECT compte.id, compte.label FROM compte, personne WHERE personne_id=personne.id and personne.login = :login";
            $statement = $database->prepare($query);
            $statement->execute(['login' => $_SESSION['login']]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelCompte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }

    }


    public static function inserted($label, $montant, $banque_id, $client_login)
    {
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

    public static function getSumCompte($client_id)
    {
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

    public static function transfertInterCompte($compteMoins, $comptePlus, $montant)
    {
        try {
            $database = Model::getInstance();
            try {
                $database->beginTransaction();

                
                
                $query1 = "UPDATE compte SET montant = montant - :montant WHERE id = :compteMoins";
                $statement1 = $database->prepare($query1);
                $statement1->execute([
                    'compteMoins' => $compteMoins,
                    'montant'=>$montant
                    ]);
                
                $query2 = "UPDATE compte SET montant = montant + :montant WHERE id = :comptePlus";
                $statement2 = $database->prepare($query2);
                $statement2->execute([
                    'comptePlus' => $comptePlus,
                    'montant'=>$montant
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
}

?>
<!-- ----- fin ModelBanque -->
