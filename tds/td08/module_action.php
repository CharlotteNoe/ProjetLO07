<!doctype html>
<?php
require_once 'Charte.class.php';
require_once 'Module.class.php';
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
                $module = new Module();
                $module->setSigle($_GET["sigle"]);
                $module->setLabel($_GET["label"]);
                $module->setCategorie($_GET["categorie"]);
                $module->setEffectif($_GET["effectif"]);

                if ($module->valide()){
                    $module->pageOK();
                    echo "</br><h5> SauveTXT </h5>";
                    echo ($module->sauveTXT() . "<br />\n");
                    echo "</br><h5>createTable</h5>";
                    echo ($module->createTable("modules"));
                    echo "</br>";
                    echo "</br><h5>SauveBDR</h5>";
                    echo ($module->sauveBDR("modules") . ">br />\n");
                }
                else {
                    $module->pageKO();
                }
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