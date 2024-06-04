
<!-- ----- debut ControllerPatrimoine -->
<?php


require_once '../model/ModelPersonne.php';


class ControllerPatrimoine {
 // --- page d'acceuil
 public static function patrimoineAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewPatrimoineAccueil.php';
  if (DEBUG){
  echo ("ControllerPatrimoine : patrimoineAccueil : vue = $vue");}
  require ($vue);
 }
 
 public static function patrimoineConnexion() {
  // --- page de connexion
  include 'config.php';
  $vue = $root . '/app/view/connexion/viewPatrimoineConnexion.php';  
  require ($vue);
 }
 
 
 public static function patrimoineConnected(){
   $results = ModelPersonne::verifyUtilisateur(
             htmlspecialchars($_GET['login']), htmlspecialchars($_GET['password'])
   );
   include 'config.php';
   if ($results){
       $statut =$results['0'];
       //Changement
       $_SESSION['statut']=$statut;
       //Fin changement
       $_SESSION['login']=$_GET['login'];
       /*
       switch ($statut){
           case ModelPersonne::ADMINISTRATEUR:
               $vue = $root . '/app/view/viewAdministrateurAccueil.php';
               break;
           case ModelPersonne::CLIENT:
               $vue = $root . '/app/view/viewClientAccueil.php';
               break;
           default :
       $vue = $root . '/app/view/viewPatrimoineAccueil.php';
       */
       //Changement
       $vue = $root . '/app/view/viewPatrimoineAccueil.php';
       //Fin de changement
       //}
   }
   else{
       $vue = $root . '/app/view/connexion/viewErrorConnexion.php';
   }
   require ($vue);
 }
 
 
 public static function patrimoineLogOut(){
     /*session_unset();*/
     $_SESSION['login']="vide";
     $_SESSION['statut']=2;
     include 'config.php';
     $vue = $root . '/app/view/viewPatrimoineAccueil.php';
     require ($vue);
 }

}
?>
<!-- ----- fin ControllerPatrimoine -->


