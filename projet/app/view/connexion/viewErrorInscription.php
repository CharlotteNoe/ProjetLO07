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
    <h4 class='mt-4 p-2 text-white text-center bg-danger rounded'>Login déjà utilisé, veuillez en choisir un autre</h4>
    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
        <div class="form-group">
            <input type="hidden" name='action' value='patrimoineInscrit'>
            <label class='w-25' for="nom">NOM : </label><input type="text" name='nom' size='40' required> <br/>
            <label class='w-25' for="prénom">Prénom : </label><input type="text" name='prenom' size='40' required> <br/>
            <label class='w-25' for="login">Login : </label><input type="text" name='login' size='40' required> <br/>
            <label class='w-25' for="password">Password : </label><input type="password" name='password' size='40' required> <br/>
        </div>
        <p/>
        <br/>
        <button class="btn btn-success" type="submit">S'inscrire</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewInsert -->



