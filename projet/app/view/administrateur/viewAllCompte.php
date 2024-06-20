
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

      <div class="mt-4 p-2 text-dark text-center bg-success rounded">
          <h4>
              Liste des comptes
          </h4>
      </div>

    <table class="mt-4 table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Nom</th>
          <th scope = "col">Prénom</th>
          <th scope = "col">Label de la banque</th>
          <th scope = "col">Pays de la banque</th>
          <th scope = "col">Label du compte</th>
          <th scope = "col">Montant</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
          <?php
          foreach ($results as $element) {
              echo("<tr>");
              echo("<td>" . htmlspecialchars($element['nom']) . "</td>");
              echo("<td>" . htmlspecialchars($element['prenom']) . "</td>");
              echo("<td>" . htmlspecialchars($element['banque_label']) . "</td>");
              echo("<td>" . htmlspecialchars($element['pays']) . "</td>");
              echo("<td>" . htmlspecialchars($element['compte_label']) . "</td>");
              echo("<td>" . htmlspecialchars($element['montant']) . "</td>");
              echo("</tr>");
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllCompte -->
  
  
  