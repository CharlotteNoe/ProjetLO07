
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

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">client_nom</th>
          <th scope = "col">client_prenom</th>
          <th scope = "col">residence_label</th>
          <th scope = "col">residence_ville</th>
          <th scope = "col">residence_prix</th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($results as $element) {
              echo("<tr>");
              echo("<td>" . htmlspecialchars($element['nom']) . "</td>");
              echo("<td>" . htmlspecialchars($element['prenom']) . "</td>");
              echo("<td>" . htmlspecialchars($element['label']) . "</td>");
              echo("<td>" . htmlspecialchars($element['ville']) . "</td>");
              echo("<td>" . htmlspecialchars($element['prix']) . "</td>");
              echo("</tr>");
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllResidence -->
  
  
  