<!doctype html>
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
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

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
          <h5 class="card-title">Formulaire 3 avec champs cachés</h5>

          <div class='mx-lg-3'> 
              <form action="lo07_analyse_superglobales2.php" method="post">
                  <?php
                  $nom_organisation=$_POST['nom_organisation'];
                  $adresse_organisation=$_POST['adresse_organisation'];
                  $date_creation=$_POST['date_creation'];
                  $nom_prenom_organisation=$_POST['nom_prenom_organisation'];
                  $nom_prenom_traitement=$_POST['nom_prenom_traitement'];
                  $nom_prenom_DPO=$_POST['nom_prenom_DPO'];
                  ?>
                  <input type="hidden" name="nom_organisation" value="<?php echo $nom_organisation; ?>">
                  <input type="hidden" name="adresse_organisation" value="<?php echo $adresse_organisation; ?>">
                  <input type="hidden" name="date_creation" value="<?php echo $date_creation; ?>"> 
                  <input type="hidden" name="nom_prenom_organisation" value="<?php echo $nom_prenom_organisation; ?>">
                  <input type="hidden" name="nom_prenom_traitement" value="<?php echo $nom_prenom_traitement; ?>">
                  <input type="hidden" name="nom_prenom_DPO" value="<?php echo $nom_prenom_DPO; ?>">
                  <input type="hidden" name="nom_traitement" value="DRH salaire">
                  <input type="hidden" name="finalite_traitement" value="Calcul de la prime de noël">
                  <input type="hidden" name="donnees_perso" value="1">
                  <input type="hidden" name="donnees_sensible" value="0"> 
                  <input type="hidden" name="donnees_hors_UE" value="0"> 
                  <input type="submit" value="envoyer">
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