
<!-- ----- début viewAllCompte -->
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
              Liste des comptes
          </h4>
      </div>

      
      <?php
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Nom', 'Prénom', 'Label de la banque', 'Pays de la banque', 'Label du compte', 'Montant'];
    $data =[];
    foreach ($results as $element){
        $data[]=[htmlspecialchars($element['nom']),htmlspecialchars($element['prenom']),htmlspecialchars($element['banque_label']),htmlspecialchars($element['pays']),htmlspecialchars($element['compte_label']),htmlspecialchars($element['montant']).",00"];
    }
    creerTable($headers, $data);
    ?>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllCompte -->
  
  
  