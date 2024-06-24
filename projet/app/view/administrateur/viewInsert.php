<!-- ----- début viewInsert -->

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
            Ajout d'une banque
        </h4>
    </div>

    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
        <div class="form-group">
            <input type="hidden" name='action' value='administrateurBanqueCreated'>
            <label class='w-25' for="id">Label : </label><input type="text" name='label' size='40' value='Crédit de Troyes' required> <br/>
            <label class='w-25' for="id">Pays : </label><input type="text" name='pays' size='40' value='France' required> <br/>
        </div>
        <p/>
        <br/>
        <button class="btn btn-primary" type="submit">Valider l'ajout</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewInsert -->



