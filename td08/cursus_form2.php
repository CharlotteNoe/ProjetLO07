<!doctype html>
<?php
require ('lo07_biblio_formulaire.php');
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD8</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap523.min.css" type="text/css"/>

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
          <h5 class="card-title">Formulaire pour la collecte des données d'un module</h5>

          <div class='mx-lg-3'> 
              <?php
                form_begin("mt-3", "get", "cursus_action2.php");
                form_input_text("Sigle", "sigle", 30, "LO07");
                form_input_text("Label", "label", 30, "Web");
                form_select("Catégorie", "categorie", "", 4, array("CS","TM","EC","ME","CT"));
                form_input_text("Effectif", "effectif", 30, "87");
                form_input_submit("envoyer");
                form_input_reset("effacer");
                form_end();
              ?>
          </div>
        </div>
      </div>

      

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 23/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>