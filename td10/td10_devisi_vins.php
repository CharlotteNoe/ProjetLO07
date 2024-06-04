<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD10</title>
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

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Charlotte NOE</a>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Titre</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-warning bg-opacity-25">
                <?php
                $dsn= 'mysql:dbname=noecharl;host=localhost;charset=utf8';
                $username='noecharl';
                $password='deGFNkTL';
                $option=array();
                try{
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Connexion à ma base sur dev-isi</h5>";
                    echo "<div class='mx-lg-3'>";
                        $database = new PDO($dsn, $username, $password, $option);
                        echo "<ul>";
                        echo "<li>dsn = $dsn</li>";
                        echo "<li>username = $username</li>";
                        echo "<li>password = $password</li>";
                        echo "</ul>";
                    echo "</div>";
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Insertion d'un tuple : insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete="insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45, true)";
                        $resultat=$database->exec($requete);
                
                        if ($resultat ===false){
                            echo "Nombre de tuples ajoutés = 0";                    
                        }else{
                            echo "Nombre de tuples ajoutés =" .$resultat;
                        }
                        echo "</div>";    
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Requête SQL : query = select * from vin where annee = 1976</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete1 = "select * from vin where annee = 1976";
                        $resultat1 = $database->query($requete1);
                        if ($resultat1){
                            echo"<ol>";
                            while ($ligne = $resultat1->fetch()){
                                echo "<li>vin(".$ligne['id'].",".$ligne['cru'].",".$ligne['annee'].",".$ligne['degre'].")</li>";
                            }
                            echo "</ol>";
                        }else {
                            echo "Ko, il y a un problème<br/>\n";
                            echo "<pre>";
                            print_r($database->errorInfo());
                            echo "</pre>";
                        }
                    echo "</div>";
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Resultats dans un tableau Bootstrap avec select * from vin where annee = 1976</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete1 = "select * from vin where annee = 1976";
                        $resultat1 = $database->query($requete1);
                        if ($resultat1){
                            echo "<div class='table-responsive'>";
                            echo"<table class='table table-success'>";
                            echo "<tbody>";
                            while ($ligne = $resultat1->fetch()){
                                echo "<tr>";
                                echo "<td>".$ligne['id']."</td>";
                                echo "<td>".$ligne['cru']."</td>";
                                echo "<td>".$ligne['annee']."</td>";
                                echo "<td>".$ligne['degre']."</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                        }else {
                            echo "Ko, il y a un problème<br/>\n";
                            echo "<pre>";
                            print_r($database->errorInfo());
                            echo "</pre>";
                        }
                    echo "</div>";
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Récupération des noms des attributs avec select id, cru from vin where annee = 1976</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete2 = "select id, cru from vin where annee = 1976";
                        $resultat2 = $database->query($requete2);
                        if ($resultat2){
                            echo "<div class='table-responsive'>";
                            echo"<table class='table'>";
                            echo "<thead class='table-danger'>";
                            echo "<tr>";
                            for ($i = 0; $i < $resultat2->columnCount(); $i++){
                                $meta = $resultat2->getColumnMeta($i);
                                echo "<th>".$meta['name']."</th>";
                            }
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody class='table-success'>";
                            while ($ligne = $resultat2->fetch()){
                                echo "<tr>";
                                echo "<td>".$ligne['id']."</td>";
                                echo "<td>".$ligne['cru']."</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                        }else {
                            echo "Ko, il y a un problème<br/>\n";
                            echo "<pre>";
                            print_r($database->errorInfo());
                            echo "</pre>";
                        }
                    echo "</div>";
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Requête parametrée par position avec annee = 1980</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete3 = "select cru, annee from vin where annee = ?";
                        $resultat3 = $database->prepare($requete3);
                        $annee = 1980;
                        $resultat3->execute([$annee]);
                        if ($resultat3){
                            echo "<div class='table-responsive'>";
                            echo"<table class='table'>";
                            echo "<thead class='table-danger'>";
                            echo "<tr>";
                            for ($i = 0; $i < $resultat3->columnCount(); $i++){
                                $meta = $resultat3->getColumnMeta($i);
                                echo "<th>".$meta['name']."</th>";
                            }
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody class='table-success'>";
                            while ($ligne = $resultat3->fetch()){
                                echo "<tr>";
                                echo "<td>".$ligne['cru']."</td>";
                                echo "<td>".$ligne['annee']."</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                        }else {
                            echo "Ko, il y a un problème<br/>\n";
                            echo "<pre>";
                            print_r($database->errorInfo());
                            echo "</pre>";
                        }
                    echo "</div>";
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Paramètre nommés</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete4 = "select * from vin where annee = :an and degre = :dg";
                        $resultat4 = $database->prepare($requete4);
                        $resultat4->execute([
                            'an' => 1980,
                            'dg' => 10.00
                            ]);
                        if ($resultat4){
                            echo "<div class='table-responsive'>";
                            echo"<table class='table'>";
                            echo "<thead class='table-danger'>";
                            echo "<tr>";
                            for ($i = 0; $i < $resultat4->columnCount(); $i++){
                                $meta = $resultat4->getColumnMeta($i);
                                echo "<th>".$meta['name']."</th>";
                            }
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody class='table-success'>";
                            while ($ligne = $resultat4->fetch()){
                                echo "<tr>";
                                echo "<td>".$ligne['id']."</td>";                                
                                echo "<td>".$ligne['cru']."</td>";
                                echo "<td>".$ligne['annee']."</td>";
                                echo "<td>".$ligne['degre']."</td>";
                                echo "<td>".$ligne['bio']."</td>";                                                                
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                        }else {
                            echo "Ko, il y a un problème<br/>\n";
                            echo "<pre>";
                            print_r($database->errorInfo());
                            echo "</pre>";
                        }
                    echo "</div>";
                    
                    
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Gestion des erreurs</h5>";
                    echo "<div class='mx-lg-3'>";
                        $requete5 = "select * from vinXYZ";
                        $resultat5 = $database->query($requete5);
                        if ($resultat5){
                            echo "<div class='table-responsive'>";
                            echo"<table class='table'>";
                            echo "<thead class='table-danger'>";
                            echo "<tr>";
                            for ($i = 0; $i < $resultat5->columnCount(); $i++){
                                $meta = $resultat5->getColumnMeta($i);
                                echo "<th>".$meta['name']."</th>";
                            }
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody class='table-success'>";
                            while ($ligne = $resultat5->fetch()){
                                echo "<tr>";
                                echo "<td>".$ligne['id']."</td>";                                
                                echo "<td>".$ligne['cru']."</td>";
                                echo "<td>".$ligne['annee']."</td>";
                                echo "<td>".$ligne['degre']."</td>";
                                echo "<td>".$ligne['bio']."</td>";                                                                
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                        }else {
                            echo "Ko, il y a un problème<br/>\n";
                            echo "<pre>";
                            print_r($database->errorInfo());
                            echo "</pre>";
                        }
                    echo "</div>";
                    
                    
                } catch (PDOException $e) {
                    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
                
                }
                
                try{
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Gestion des transactions</h5>";
                    echo "<div class='mx-lg-3'>";
                        $database->beginTransaction();
                        $requete6 = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45, false)";
                        $resultat6 = $database->prepare($requete6);
                        $resultat6->execute();
                        $resultat6->execute();
                        
                        $database->commit();
                        echo "<p>Transaction réussie.</p>";
                    echo "</div>";
                } catch (PDOException $e) {
                    $database->rollBack();
                    echo "<p>Transaction avec erreur</p>";
                    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());

                }
                
                try {
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Vérifications</h5>";
                    echo "<div class='mx-lg-3'>";

                    $requeteVerification = "select * from vin where id = 2000";
                    $statementVerification = $database->prepare($requeteVerification);
                    $statementVerification->execute();

                    if ($statementVerification->rowCount() === 0) {
                        echo "<p>Le vin avec l'ID 2000 n'est pas présent dans la base de données. La première insertion a bien été annulée.</p>";
                    } else {
                        echo "<p>Le vin avec l'ID 2000 est présent dans la base de données malgré l'annulation de la transaction.</p>";
                    }
                } catch (PDOException $e) {
                    echo "<p>Une erreur s'est produite lors de la vérification : " . $e->getMessage() . "</p>";
                }
                
                try {
                    echo "<h5 class='card-body bg-primary mb-3 text-white rounded'>Vérifications</h5>";
                    echo "<div class='mx-lg-3'>";

                    $requeteSuppression = "delete from vin where id>2500";
                    $nbvinsSupprimes = $database->exec($requeteSuppression);
                    $statementVerification->execute();

                    echo "<p>$nbvinsSupprimes vins ont été supprimés avec succès.</p>";
                } catch (PDOException $e) {
                    echo "<p>Une erreur s'est produite lors de la suppression : " . $e->getMessage() . "</p>";                
                    
                }
                ?>
       
        </div>
      </div>


    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 09/05/2024</small>
    <p/><hr/><p/>
  </body>
</html>