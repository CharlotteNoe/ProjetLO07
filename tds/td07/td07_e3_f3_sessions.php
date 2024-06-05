<!doctype html>
<?php


session_start();
$_SESSION['nom_prenom_organisation']=$_POST['nom_prenom_organisation'];
$_SESSION['nom_prenom_traitement']=$_POST['nom_prenom_traitement'];
$_SESSION['nom_prenom_DPO']=$_POST['nom_prenom_DPO'];
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
          <h5 class="card-title">Formulaire 3 avec variables de sessions</h5>

          <div class='mx-lg-3'> 
              <form action="td07_sessions.php" method="post">
                  <div class='mb-3'>
                    <label for="nom_traitement" class=' fw-bold'>Nom du traitement</label>
                    <input type="text" class='form-control' id='nom_traitement' name="nom_traitement" value='DRH salaire'>
                  </div>
                  <div class='mb-3'>
                    <label for="finalite_traitement" class=' fw-bold'>Finalité du traitement</label>
                    <input type="text" class='form-control' id="finalite_traitement" name="finalite_traitement" value='Calcul de la prime de noël'>
                  </div>
                  <div class='mb-3'>
                      <input type='checkbox' id="donnees_perso" name='donnees_perso' checked />
                      <label for="donnees_perso">Traitement de données personnelles</label></br>
                      <input type='checkbox' id="donnees_sensibles" name='donnees_sensibles'/>
                      <label for="donnees_sensibles">Traitement de données sensibles</label></br>
                      <input type='checkbox' id="donnees_hors_UE" name='donnees_hors_UE'/>
                      <label for="donnees_hors_UE">Traitement avec transfert de données hors UE</label>
                  </div>
                  <input type="submit" value="envoyer" class='btn btn-success'>
                  <input type="reset" value="effacer" class='btn btn-danger'>
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