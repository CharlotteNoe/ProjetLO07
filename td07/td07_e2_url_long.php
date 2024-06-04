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
          <h5 class="card-title">Exercice 1 : réparation et validation</h5>

          <div class='mx-lg-3'> 

              <p><a href="http://localhost/lo07_tds/td07/lo07_analyse_superglobales2.php?ville=troyes&effectif=3000">Troyes</a></p>
              <p><a href="http://localhost/lo07_tds/td07/lo07_analyse_superglobales2.php?ville=paris&effectif=10000">Paris</a></p>
              <p><a href="http://localhost/lo07_tds/td07/lo07_analyse_superglobales2.php?ville=orleans&effectif=4000">Orléans</a></p>

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