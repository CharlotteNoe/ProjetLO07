<!doctype html>
<?php
$datelimite= time()+60*60;
setcookie('nom_organisation', $_POST['nom_organisation'],$datelimite);
setcookie('adresse_organisation', $_POST['adresse_organisation'],$datelimite);
setcookie('date_creation', $_POST['date_creation'],$datelimite);
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
          <h5 class="card-title">Formulaire 2 avec cookies</h5>

          <div class='mx-lg-3'> 
              <form action="td07_e3_f3_cookies.php" method="post">
                  <div class='mb-3'>
                    <label for="nom_prenom_organisation" class=' fw-bold'>Nom et prénom du responsable de l'organisation</label>
                    <input type="text" class='form-control' id='nom_prenom_organisation' name="nom_prenom_organisation" value='COLLET Christophe'>
                  </div>
                  <div class='mb-3'>
                    <label for="nom_prenom_traitement" class=' fw-bold'>Nom et prénom du responsable du traitement</label>
                    <input type="text" class='form-control' id="nom_prenom_traitement" name="nom_prenom_traitement" value='NOE Charlotte'>
                  </div>
                  <div class='mb-3'>
                      <label for="nom_prenom_DPO" class=' fw-bold'>Nom et prénom du délégué à la protection des données</label></br>
                      <select id='nom_prenom_DPO' name='nom_prenom_DPO' class="form-select">
                        <option value="NIGRO jean-marc">NIGRO jean-marc</option>
                        <option value="NIGRO jean-marc">NIGRO marc-jean</option>
                      </select>
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