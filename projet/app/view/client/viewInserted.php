<!-- ----- début viewInserted -->
<?php
require($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
    include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results == -1) {
        echo("<h4 class='mt-4 p-2 text-dark text-center bg-primary rounded'>Problème d'insertion du compte</h4>");
        echo("label = " . $_GET['label']);
    } else {
        echo("<h4 class='mt-4 p-2 text-dark text-center bg-primary rounded'>Le nouveau compte a été ajouté </h4>");
        echo("<div class='mt-4 p-2 text-white bg-secondary rounded'>");
        echo("<ul>");
        echo("<li>label = " . $_GET['label'] . "</li>");
        echo("<li>montant = " . $_GET['montant'] . "</li>");
        echo("<li>banque = " . $_GET['banque'] . "</li>");
        echo("</ul>");
        echo("</div>");
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentPatrimoineFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    