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
  
    
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LO07 TD03</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice4">Exercice 4</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice5">Exercice 5</a></li>
              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.php.net/manual/fr/">Manuel PHP</a></li>
                  <li><a class="dropdown-item" href="https://www.w3schools.com/php/">W3schools PHP</a></li>
                  <li><a class="dropdown-item" href="https://www.learn-php.org/fr/">Learn PHP</a></li>
                  
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Introduction à PHP</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
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

            <?php echo "Bonjour à tous"; ?>

          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : variables PHP</h6>
            <div class='mx-lg-3'> 

              <?php 
              $prenom="Charlotte";
              $nom="Noé";
              $age=19;
              $ingenieur=false;
              ?>
              
                <ul class="list-group">
                    <li class="list-group-item">Nom = <?php echo $nom; ?></li>
                    <li class="list-group-item">Prénom = <?php echo $prenom; ?></li>
                    <li class="list-group-item">Age = <?php echo $age; ?></li>
                    <li class="list-group-item">Ingénieur = <?php echo $ingenieur ? '1' : '0'; ?></li>
                </ul>
            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : tableaux PHP</h6>
            <div class='mx-lg-3'> 

                <p class="text-danger">print_r</p>
              <?php
              $tabCapitales = array("Vienne","Sofia","Nicosie","Copenhague","Paris","Helsinki","Vilnius","Bratislava","Ljubljana","Riga");
              $tabCapitales[] = "Varsovie";
              unset($tabCapitales[4]);
              echo "<pre>";
              print_r($tabCapitales);
              echo "</pre>";
              ?>
                <p/><hr/>                
                <p class="text-danger">foreach</p>
                
                <ul class="list-group">
              <?php
            foreach ($tabCapitales as $capitales){
                echo "<li class='list-group-item'>$capitales</li>";
            }
              ?>
                </ul>
                <p/><hr/>
                <p class="text-danger">Implode</p>
                <ul class="list-group">
              <?php
              $capitalesString = implode("; ", $tabCapitales);
              echo "<li class='list-group-item'>$capitalesString</li>";
              ?>
                </ul>
                <p/><hr/>
                <p class="text-danger">Accès aux données</p>
                <ul class="list-group">
                    <?php
                    $nombreCapitales = count($tabCapitales);
                    sort($tabCapitales);
                    $triCapitalesString = implode("; ", $tabCapitales);
                    echo "<li class='list-group-item'>Nombre d'éléments = $nombreCapitales</li>";
                    echo "<li class='list-group-item text-bg-danger'>Tableau trié = $triCapitalesString</li>";                    
                    ?>
                </ul>
            </div>      
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 4 ===== -->
      <!-- ================================================================================================================ -->
      
      <p/><hr/>
      <a id='exercice4'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 4 : tableaux associatif</h6>
            <div class='mx-lg-3'> 
                <?php
                $hashCapitales = array (
                    "Bulgarie" => "Sofia",
                    "Chypre" => "Nicosie",
                    "Estonie" => "Talinn",
                    "Lettonie" => "Riga",
                    "Lituanie" => "Vilnius",
                    "Roumanie" => "Bucarest"
                );
                ?>
                <p/><hr/>
                <p class="text-danger">Estonie ?</p>
                <ul class="list-group">
                    <?php
                    $capitaleEstonie = $hashCapitales["Estonie"];
                    echo "<li class='list-group-item'>$capitaleEstonie</li>";
                    ?>
                </ul>
                
                <p/><hr/>
                <p class="text-danger">Bilan d'un ajout</p>
                <ul class="list-group">
                    <?php
                    $hashCapitales["Estonie"] = "Narva";
                    $capitaleEstonie = $hashCapitales["Estonie"];
                    echo "<li class='list-group-item'>$capitaleEstonie</li>";
                    ?>
                </ul>
                
                <p/><hr/>
                <p class="text-danger">print_r</p>
                <?php
                echo "<pre>";
                print_r($hashCapitales);
                echo "</pre>";
                ?>
                
                <p/><hr/>
                <p class="text-danger">foreach</p>
                <ul class="list-group">
                    <?php
                    foreach ($hashCapitales as $pays => $capitales){
                        echo "<li class='list-group-item'>$pays ==> $capitales</li>";
                    }
                    ?>
                </ul>
                
                <p/><hr/>
                <p class="text-danger">Accès aux données</p>
                <ul class="list-group">
                    <li class="list-group-item"> Liste des clés =
                    <?php
                    $cle =  array_keys($hashCapitales);
                    echo "<pre>";
                    print_r($cle);
                    echo "</pre>";
                    ?>
                    </li>
                    <li class="list-group-item"> Liste des valeurs =
                    <?php
                    $valeur =  array_values($hashCapitales);
                    echo "<pre>";
                    print_r($valeur);
                    echo "</pre>";
                    ?>
                    </li>
                </ul>
            </div>      
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 5 ===== -->
      <!-- ================================================================================================================ -->
      
      <p/><hr/>
      <a id='exercice5'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 5 : Fonctions PHP</h6>
            <div class='mx-lg-3'>
                <p/><hr/>
                <p class="text-danger">Test de la fonction avec Web, 6</p>
                <?php
                function badge($label, $compteur) {
                    $badge_html = "<button type='button' class='btn btn-primary'>";
                    $badge_html .= "$label <span class='badge badge-light text-danger mx-10'>$compteur</span>";
                    $badge_html .= "</button>";
                    return $badge_html;
                }
                $exemple_badge = badge("Web", 6);
                echo $exemple_badge;
                ?>
                
                <p/><hr/>
                <p class="text-danger">Accès aux données</p>
                <?php
                foreach ($hashCapitales as $pays => $capitales){
                    $nombrelettres = strlen($capitales);
                    $badgeCapitale = badge($capitales, $nombrelettres);
                    echo $badgeCapitale;
                }
                ?>
            </div>      
        </div>
      </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 16/03/2024</small>
    <p/><hr/><p/>
  
</html>