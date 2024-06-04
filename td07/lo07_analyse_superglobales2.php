<!doctype html>
<?php
session_start();
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lo07_analyse_formulaire version 2</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="container">
      <h1>xxx</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">lo07_analyse_formulaire version 1</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>lo07_analyse_formulaire version 2</h1>
      </div>


      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <?php

      $superglobales = array("\$_GET" => $_GET, "\$_POST" => $_POST, "\$_COOKIE" => $_COOKIE, "\$_SESSION" => $_SESSION);

      foreach ($superglobales as $label => $globale) {
          if (!empty($globale)) {
              
              ksort ($globale);


              echo("<div class='card'>");
              echo("<div class='card-body bg-info'>");
              echo("<h5 class='card-title'>SuperGlobale : $label</h5>");

              echo("<div class = 'col-4'>");
              echo("<table class = 'table table-bordered'>");
              echo("<thead>");
              echo("<tr>");
              echo("<th>#</th>");
              echo("<th>clé</th>");
              echo("<th>valeur</th>");
              echo("</tr>");
              echo("</thead>");

              $compteur = 0;
              echo ("<tbody>");
              foreach ($globale as $cle => $valeur) {
                  $compteur++;
                  echo ("<tr>");
                  echo("<th scope='row'>$compteur</th>");
                  echo ("<td>$cle</td>");

                  if (is_array($valeur)) {
                      $liste = implode(", ", $valeur);
                      echo ("<td>$liste</td</tr>");
                  } else {
                      echo ("<td>$valeur</td>");
                      echo ("</tr>");
                  }
              }
              echo ("</tbody>");
              echo ("</table>");
              echo ("</div>");
              echo ("</div>");
              echo ("</div>");
          }
      }
      ?>

    </div>
  </div>
</div>

</body>
</html>