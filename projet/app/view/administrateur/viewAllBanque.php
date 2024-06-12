
<!-- ----- début viewAllBanque -->
<?php

require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
      ?>

      <div class = "mt-4 p-2 text-dark text-center bg-success rounded">
          <h4>
              Vue de toutes les banques
          </h4>
      </div>

    <table class = "mt-4 table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">label</th>
          <th scope = "col">pays</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
          <?php
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td></tr>", $element->getLabel(), 
             $element->getPays());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllBanque -->
  
  
  