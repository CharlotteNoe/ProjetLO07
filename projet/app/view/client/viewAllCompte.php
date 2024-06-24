
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
              Liste de mes comptes
          </h4>
      </div>
<!--
    <table class="mt-4 table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Compte</th>
          <th scope = "col">Montant</th>
          <th scope = "col">Banque</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
          
          foreach ($results as $element) {
              echo("<tr>");
              echo("<td>" . htmlspecialchars($element['compte_label']) . "</td>");
              echo("<td>" . htmlspecialchars($element['montant']) . "</td>");
              echo("<td>" . htmlspecialchars($element['banque_label']) . "</td>");
              echo("</tr>");
          }
          
      </tbody>
    </table>-->
    <?php
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Compte', 'Montant', 'Banque'];
    $data =[];
    foreach ($results as $element){
        $data[]=[htmlspecialchars($element['compte_label']),htmlspecialchars($element['montant']).",00",htmlspecialchars($element['banque_label'])];
    }
    creerTable($headers, $data);
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewAllCompte -->
  
  
  