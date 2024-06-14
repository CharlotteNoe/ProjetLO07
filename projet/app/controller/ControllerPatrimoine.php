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
       $utilisateur =$results[0];
       $_SESSION['statut']=$utilisateur->getStatut();
       $_SESSION['login']=$_GET['login'];
       $_SESSION['prenom']=$utilisateur->getPrenom();
       $_SESSION['nom']=$utilisateur->getNom();
       $vue = $root . '/app/view/viewPatrimoineAccueil.php';
       
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
     $_SESSION['prenom']= "vide";
     $_SESSION['nom']= "vide";
     include 'config.php';
     $vue = $root . '/app/view/viewPatrimoineAccueil.php';
     require ($vue);
 }

}

?>
<!-- ----- fin ControllerPatrimoine -->


