<!doctype html>
<?php
session_start();
$_SESSION['nom_traitement']=$_POST['nom_traitement'];
$_SESSION['finalite_traitement']=$_POST['finalite_traitement'];
if (isset ($_POST['donnees_perso'])){
    $_SESSION['donnees_perso']=$_POST['donnees_perso'];}
if (isset ($_POST['donnees_sensible'])){
$_SESSION['donnees_sensible']=$_POST['donnees_sensible'];}
if (isset ($_POST['donnees_hors_UE'])){
$_SESSION['donnees_hors_UE']=$_POST['donnees_hors_UE'];}
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap523.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <?php include 'nav.html'; ?>

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>TD07 : Gestion du contexte</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          

          <div class='mx-lg-3'> 
              <form action="lo07_analyse_superglobales2.php" method="post">
                  <input type="submit" value="envoyer" class='btn btn-success'>
              </form>
    
          </div>
        </div>
      </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 12/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>


