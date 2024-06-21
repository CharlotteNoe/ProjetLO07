
<!-- ----- début viewCompteBanque -->
<?php

require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
      ?>

      <div class="mt-4 p-2 text-dark text-center bg-success rounded">
          <h4>
              Listes des comptes d'une banque
          </h4>
      </div>
   
    <?php
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Prénom', 'Nom', 'Banque', 'Compte', 'Montant'];
    $data =[];
    foreach ($results as $element){
        $data[]=[htmlspecialchars($element['prenom']),htmlspecialchars($element['nom']),htmlspecialchars($element['banque_label']),htmlspecialchars($element['compte_label']),htmlspecialchars($element['montant']).",00"];
    }
    creerTable($headers, $data);
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewCompteBanque -->
  
  
  