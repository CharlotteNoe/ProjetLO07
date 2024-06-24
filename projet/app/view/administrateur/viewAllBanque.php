<!-- ----- début viewAllBanque -->
<?php

require($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
    include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
    ?>

    <div class="mt-4 p-2 text-dark text-center bg-primary rounded">
        <h4>
            Vue de toutes les banques
        </h4>
    </div>

    <?php
    require_once ($root . '/outil/CreateTable.php');
    $headers=['Label', 'Pays'];
    $data =[];
    foreach ($results as $element){
        $data[]=[$element->getLabel(),$element->getPays()];
    }
    creerTable($headers, $data);
    ?>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewAllBanque -->
  
  
  