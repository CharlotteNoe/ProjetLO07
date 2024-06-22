<!-- ----- debut Router1 -->
<?php

require('../controller/ControllerAdministrateur.php');
require('../controller/ControllerPatrimoine.php');
require('../controller/ControllerClient.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
    case "administrateurReadAllBanque" :
    case "administrateurBanqueCreate" :
    case "administrateurBanqueCreated" :
    case "administrateurReadBanque" :
    case "administrateurReadCompte" :
    case "administrateurReadAllClient" :
    case "administrateurReadAllAdministrateur" :
    case "administrateurReadAllCompte" :
    case "administrateurReadAllResidence" :
        ControllerAdministrateur::$action();
        break;

    case "clientReadAllCompte" :
    case "clientCompteCreate" :
    case "clientCompteCreated" :
    case "clientTransfertInterCompte" :
    case "clientTransfertInterCompteFait" :
    case "clientReadAllResidence" :
    case "clientResidenceAchat" :
    case "clientResidenceAchatCompte" :
    case "clientResidenceAchetee" :
    case "clientReadPatrimoine" :
        ControllerClient::$action();
        break;

    case "patrimoineConnexion" :
    case "patrimoineConnected" :
    case "patrimoineInscription" :
    case "patrimoineInscrit" :
    case "patrimoineLogOut" :
    case "patrimoineInnovationMVC" :
        ControllerPatrimoine::$action();
        break;

    // Tache par défaut
    default:
        $action = "patrimoineAccueil";
        ControllerPatrimoine::$action();
}
?>
<!-- ----- Fin Router1 -->

