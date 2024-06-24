
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
            Liste de mes résidences
        </h4>
    </div>
    <?php
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Nom', 'Ville', 'Prix'];
    $data =[];
    foreach ($results as $element){
        $data[]=[htmlspecialchars($element['residence_label']),htmlspecialchars($element['ville']),htmlspecialchars($element['prix'])];
    }
    creerTable($headers, $data);
    ?>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewAllCompte -->


<?php
