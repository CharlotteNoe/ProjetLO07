<!-- ----- debut ModelPersonne -->

<?php
require_once 'Model.php';

class ModelPersonne
{
    public const ADMINISTRATEUR = 0;
    public const CLIENT = 1;

    private $id, $nom, $prenom, $statut, $login, $password;

    public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $statut = NULL, $login = NULL, $password = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->statut = $statut;
            $this->login = $login;
            $this->password = $password;
        }
    }


    function getId()
    {
        return $this->id;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getStatut()
    {
        return $this->statut;
    }

    function getLogin()
    {
        return $this->login;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function setStatut($statut)
    {
        $this->statut = $statut;
    }

    function setLogin($login)
    {
        $this->login = $login;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }


    public static function getAllClient()
    {
        try {
            $database = Model::getInstance();
            $query = "select * from personne where statut=1";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    public static function getAllAdministrateur()
    {
        try {
            $database = Model::getInstance();
            $query = "select * from personne where statut=0";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    public static function verifyUtilisateur($login, $password)
    {
        try {
            $database = Model::getInstance();
            $query = "select statut, prenom, nom from personne where login= :login and password= :password";
            $statement = $database->prepare($query);
            $statement->execute([
                'login' => $login,
                'password' => $password
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, 'ModelPersonne');
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function verifyLogin($login)
    {
        try {
            $database = Model::getInstance();
            $query = "select statut, prenom, nom from personne where login= :login";
            $statement = $database->prepare($query);
            $statement->execute([
                'login' => $login
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, 'ModelPersonne');
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function ajoutPersonne($nom, $prenom, $login, $password)
    {
        try {
            $database = Model::getInstance();
            $query = "select max(id) from personne";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            $query = "insert into personne value (:id, :nom, :prenom, :statut, :login, :password)";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'nom' => $nom,
                'prenom' => $prenom,
                'statut' => 1,
                'login' => $login,
                'password' => $password
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }

    }
    
    
    public static function getPrenomNOm($id_client){
        try {
            $database = Model::getInstance();
            $query = "SELECT prenom, nom from personne where id=:id_client";
            $statement = $database->prepare($query);
            $statement->execute([
                'id_client' => $id_client
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, 'ModelPersonne');
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

}

?>
<!-- ----- fin ModelPersonne -->
