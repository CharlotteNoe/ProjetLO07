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

    }

    // Fait le transfert
    public static function clientTransfertInterCompteFait()
    {

    }

    //Affiche la liste de toutes les résidences du client
    public static function clientReadAllResidence()
    {
        $results = ModelResidence::getAllResidence($_SESSION['login']);
        include 'config.php';
        $vue = $root . '/app/view/client/viewAllResidence.php';
        require($vue);
    }

    //Affiche un formulaire pour acheter une résidence
    public static function clientResidenceAchat()
    {

    }

    //Affiche l'achat de la résidence
    public static function clientResidenceAchetee()
    {

    }

    //Affiche le bilan du patrimoine
    public static function clientReadPatrimoine()
    {

    }

}

?>
<!-- ----- fin ControllerClient -->


