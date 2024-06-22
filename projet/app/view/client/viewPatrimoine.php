
<!-- ----- début viewPatrimoine -->
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
            Mon patrimoine (compte.s et résidence.s)
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
    $headers=['Catégorie', 'Label', 'Valeur', 'Capital'];
    $data =[];
    $capital = 0;
    foreach ($results as $element){
        $capital = $capital+$element['montant'];
        $data[]=['Compte', htmlspecialchars($element['compte_label']),htmlspecialchars($element['montant']).",00",$capital.",00"];
    }
    foreach ($results2 as $element) {
        $capital = $capital+$element['prix'];
        $data[]=['Résidence', htmlspecialchars($element['residence_label']),htmlspecialchars($element['prix']).",00",$capital.",00"];
    }
    creerTable($headers, $data);
    ?>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewPatrimoine -->
  
  
  