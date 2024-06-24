<!-- ----- debut ControllerClient -->
<?php
require_once '../model/ModelBanque.php';
require_once '../model/ModelPersonne.php';
require_once '../model/ModelCompte.php';
require_once '../model/ModelResidence.php';


class ControllerClient
{

    // Affiche la liste de tous les comptes du client
    public static function clientReadAllCompte()
    {
        $results = ModelCompte::getAllCompte($_SESSION['login']);
        include 'config.php';
        $vue = $root . '/app/view/client/viewAllCompte.php';
        require($vue);
    }

    // Affiche un formulaire pour créer un compte
    public static function clientCompteCreate()
    {
        $results = ModelBanque::getAll();
        include 'config.php';
        $vue = $root . '/app/view/client/viewInsert.php';
        require($vue);
    }

    // Créer un nouveau compte
    public static function clientCompteCreated()
    {
        $results = ModelCompte::inserted(
            htmlspecialchars($_GET['label']), htmlspecialchars($_GET['montant']), htmlspecialchars($_GET['banque']), $_SESSION['login']
        );
        include 'config.php';
        $vue = $root . '/app/view/client/viewInserted.php';
        require($vue);
    }

    // Affiche un formulaire pour faire un transfert inter-compte
    public static function clientTransfertInterCompte()
    {
        $results = ModelCompte::getAllCompte($_SESSION['login'], "ASSOC");
        include 'config.php';
        $vue = $root . '/app/view/client/viewTransfertInterCompte.php';
        require($vue);
    }

    // Fait le transfert
    public static function clientTransfertInterCompteFait()
    {
        include 'config.php';
        if ($_GET['compteMoins'] == $_GET['comptePlus']) {
            $results = ModelCompte::getAllCompte($_SESSION['login'], "ASSOC");
            $vue = $root . '/app/view/client/viewErrorTransfertInterCompte.php';
        } elseif ($_GET['compteMoins'] == null || $_GET['comptePlus'] == null) {
            $results = ModelCompte::getAllCompte($_SESSION['login'], "ASSOC");
            $vue = $root . '/app/view/client/viewErrorTransfertInterCompte.php';
        } else {
            $results = ModelCompte::transfertInterCompte(
                htmlspecialchars($_GET['compteMoins']), htmlspecialchars($_GET['comptePlus']), htmlspecialchars($_GET['montant'])
            );
            $results = ModelCompte::getAllCompte($_SESSION['login'], "ASSOC");
            $vue = $root . '/app/view/client/viewAllCompte.php';
        }
        require($vue);
    }

    //Affiche la liste de toutes les résidences du client
    public static function clientReadAllResidence()
    {
        $results = ModelResidence::getAllResidence($_SESSION['login']);
        include 'config.php';
        $vue = $root . '/app/view/client/viewAllResidence.php';
        require($vue);
    }

    //Affiche un formulaire pour sélectionner une résidence à acheter
    public static function clientResidenceAchat()
    {
        $results = ModelResidence::getAllResidenceSaufLogin($_SESSION['login']);
        include 'config.php';
        $vue = $root . '/app/view/client/viewAchat.php';
        require($vue);
    }

    //Affiche un formulaire pour acheter la résidence
    public static function clientResidenceAchatCompte()
    {
        include 'config.php';
        if ($_GET['residence'] == null){
            $vue = $root . '/app/view/client/viewErrorAchat.php';
        }else{
            $id_residence=$_GET['residence'];
            $info = ModelResidence::getInfoResidence($_GET['residence']);
            $montant=htmlspecialchars($info[0]['prix']);
            $id_vendeur = htmlspecialchars($info[0]['personne_id']);
            $results = ModelCompte::getAllCompteVendeur($id_vendeur);
            $results2 = ModelCompte::getAllCompte($_SESSION['login'],"ASSOC");
            $vue = $root . '/app/view/client/viewAchatCompte.php';
        }

        require($vue);
    }

    //Affiche l'achat de la résidence
    public static function clientResidenceAchetee()
    {
        include 'config.php';
        if ($_GET['compteVendeur'] == null || $_GET['compteAcheteur'] == null) {
            $vue = $root . '/app/view/client/viewErrorAchat.php';
        } else {
            $results = ModelCompte::transfertInterCompte(
                htmlspecialchars($_GET['compteAcheteur']), htmlspecialchars($_GET['compteVendeur']), htmlspecialchars($_GET['montant'])
            );
            
            $results2 = ModelResidence::transfertResidence(htmlspecialchars($_SESSION['login']), htmlspecialchars($_GET['id_residence']));
            
            
            $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        }
        require($vue);
    }

    //Affiche le bilan du patrimoine
    public static function clientReadPatrimoine()
    {
        $results = ModelCompte::getAllCompte($_SESSION['login']);
        $results2 = ModelResidence::getAllResidence($_SESSION['login']);
        include 'config.php';
        $vue = $root . '/app/view/client/viewPatrimoine.php';
        require($vue);
    }

}

?>
<!-- ----- fin ControllerClient -->


