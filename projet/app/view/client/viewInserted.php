
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
    include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results==-1){
        echo ("<h3>Problème d'insertion du compte</h3>");
     echo ("label = " . $_GET['label']);
    }
    else {
     echo ("<h3>Le nouveau compte a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>label = " . $_GET['label'] . "</li>");
     echo ("<li>montant = " . $_GET['montant'] . "</li>");
     echo ("<li>banque = " . $_GET['banque'] . "</li>");     
     echo("</ul>");
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentPatrimoineFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    