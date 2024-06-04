<!doctype html>
<?php

require_once 'Module.class.php';
require_once 'Cursus.class.php';
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

          <div class='mx-lg-3'> 
              <?php
                echo "<div class='mb-3'>";
                echo "<h5>Définition des modules</h5>";
                $moduleLO07 = new Module();
                $moduleLO07->setSigle("lo07");
                $moduleLO07->setLabel("Technologies du Web");
                $moduleLO07->setCategorie("TM");
                $moduleLO07->setEffectif(140);
                echo "$moduleLO07";

                $moduleIF26 = new Module();
                $moduleIF26->setSigle("if26");
                $moduleIF26->setLabel("Applications Mobiles Android");
                $moduleIF26->setCategorie("TM");
                $moduleIF26->setEffectif(77);
                echo "$moduleIF26";
                echo "</div>";
                
                echo "<div class='mb-3'>";
                echo "<h5>Définition d'un cursus</h5>";
                $cursus = new Cursus();
                $cursus->addModule($moduleLO07);
                $cursus->addModule($moduleIF26);
                echo "</div>";
                
                echo "<div class='mb-3'>";
                echo "<h5>Affichage d'un cursus</h5>";
                $cursus->affiche();
                echo "</div>";
              ?>
          </div>
        </div>
      </div>

      

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 11/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>

