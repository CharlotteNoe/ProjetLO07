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
    <link rel="stylesheet" href="css/bootstrap523.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="my_css.css"/>
    </style>

    
  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>



      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">NOE Charlotte</a>
          
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Formulaire 1 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Exercice 3 : traitement du formulaire du tounoi</h5>
          <h3 class="card-title text-danger bg-danger bg-opacity-25">SuperGlobale GET</h3>
          <div class='mx-lg-3'> 

            <?php
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>name</th>";
            echo "<th scope='col'>valeur(s)</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($_GET as $key => $value) {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    if (is_array($value))
                        echo "<td>".implode(", ",$value)."</td>";
                    else echo "<td>$value</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
            
                  

          </div>
        </div>
      </div>

      <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 06/04/2024</small>
    <p/><hr/><p/>
  </body>
</html>