
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results=='update') {
     echo ("<h3>La récolte a été mise à jour </h3>");
     echo("<ul>");
     
     echo ("<li>vin_id = " . $_GET['vin_id'] . "</li>");
     echo ("<li>prod_id = " . $_GET['producteur_id'] . "</li>");
     echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
     echo("</ul>");
    }else if($results=='insert'){
     echo ("<h3>La nouvelle récolte a été ajouté </h3>");
     echo("<ul>");
     
     echo ("<li>vin_id = " . $_GET['vin_id'] . "</li>");
     echo ("<li>prod_id = " . $_GET['producteur_id'] . "</li>");
     echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
     echo("</ul>");        
    }
    else {
     echo ("<h3>Problème d'insertion de la recolte</h3>");
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    