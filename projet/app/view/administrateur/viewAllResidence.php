
<!-- ----- début viewAllResidence -->
<?php

require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
      ?>

      <div class="mt-4 p-2 text-dark text-center bg-primary rounded">
          <h4>
              Listes des résidences
          </h4>
      </div>
<!--
    <table class="mt-4 table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Nom</th>
          <th scope = "col">Prénom</th>
          <th scope = "col">Résidence</th>
          <th scope = "col">Ville</th>
          <th scope = "col">Prix</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
          
          foreach ($results as $element) {
              echo("<tr>");
              echo("<td>" . htmlspecialchars($element['nom']) . "</td>");
              echo("<td>" . htmlspecialchars($element['prenom']) . "</td>");
              echo("<td>" . htmlspecialchars($element['label']) . "</td>");
              echo("<td>" . htmlspecialchars($element['ville']) . "</td>");
              echo("<td>" . htmlspecialchars($element['prix']) . "</td>");
              echo("</tr>");
          }
          
      </tbody>
    </table>
      -->
          <?php
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Nom', 'Prénom', 'Résidence', 'Ville', 'Prix'];
    $data =[];
    foreach ($results as $element){
        $data[]=[htmlspecialchars($element['nom']),htmlspecialchars($element['prenom']),htmlspecialchars($element['label']),htmlspecialchars($element['ville']),htmlspecialchars($element['prix']).",00"];
    }
    creerTable($headers, $data);
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllResidence -->
  
  
  