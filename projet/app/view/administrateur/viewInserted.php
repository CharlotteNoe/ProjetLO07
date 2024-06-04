
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
    if ($results=="existe"){
        echo ("<h3>La banque existe déjà</h3>");
    }
    else if ($results==-1){
        echo ("<h3>Problème d'insertion de la banque</h3>");
     echo ("label = " . $_GET['label']);
    }
    else {
     echo ("<h3>La nouvelle banque a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>label = " . $_GET['label'] . "</li>");
     echo ("<li>pays = " . $_GET['pays'] . "</li>");
     echo("</ul>");
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentPatrimoineFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    