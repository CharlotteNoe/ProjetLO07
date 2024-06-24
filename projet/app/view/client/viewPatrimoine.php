
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

    <div class="mt-4 p-2 text-dark text-center bg-primary rounded">
        <h4>
            Mon patrimoine (compte.s et résidence.s)
        </h4>
    </div>
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
  
  
  