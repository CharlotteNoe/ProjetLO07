
<!-- ----- début viewAllPersonne -->
<?php

require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
      
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Nom', 'Prénom','Login', 'Mot de passe'];
    $data =[];
    foreach ($results as $element){
        $data[]=[$element->getNom(),$element->getPrenom(), $element->getLogin(), $element->getPassword()];
    }
    creerTable($headers, $data);
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllPersonne -->
  
  
  