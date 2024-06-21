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
    <h4>
        Amélioration du code MVC
    </h4>
    
    <p>Création d'une bibliothèque avec une fonction qui permet de créer les tableaux à partir de : </p>
    <ul>
        <li>$headers qui est un tableau contenant les en-têtes du tableaux</li>
        <li>$data qui est un tableau de tableau contenant les données du tableau</li>
    </ul>

</div>
<?php
    include ($root . '/app/view/fragment/fragmentPatrimoineFooter.html');
?>
    <!-- ----- fin viewInserted -->    

    
    

