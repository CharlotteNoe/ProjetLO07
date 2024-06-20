
<!-- ----- début viewAllPersonne -->
<?php

require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
      ?>

    <table class="mt-4 table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Nom</th>
          <th scope = "col">Prénom</th>
          <th scope = "col">Login</th>
          <th scope = "col">Mot de passe</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
          <?php
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $element->getNom(), 
             $element->getPrenom(), $element->getLogin(), $element->getPassword());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllPersonne -->
  
  
  