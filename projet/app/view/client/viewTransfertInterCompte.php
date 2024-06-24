
<!-- ----- début viewInsert -->

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
            Transfert inter-compte
        </h4>
    </div>

    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
        <div class="form-group">
            <input type="hidden" name='action' value='clientTransfertInterCompteFait'>
            <label for="compteMoins">Sélectionnez le compte d'où part l'argent : </label> <select class="form-control" id='compteMoins' name='compteMoins' required style="width: 300px">
                <?php
                foreach ($results as $compte) {
                    $id_compte=htmlspecialchars($compte['id']);
                    $label_compte=htmlspecialchars($compte['compte_label']);
                    echo ("<option value='$id_compte'>$label_compte</option>");
                }
                ?>
            </select>
            <label for="comptePlus">Sélectionnez le compte où arrive l'argent : </label> <select class="form-control" id='comptePlus' name='comptePlus' required style="width: 300px">
                <?php
                foreach ($results as $compte) {
                    $id_compte=htmlspecialchars($compte['id']);
                    $label_compte=htmlspecialchars($compte['compte_label']);
                    echo ("<option value='$id_compte'>$label_compte</option>");
                }
                ?>
            </select>
            <label class='w-25' for="montant">Montant transféré : </label><input type="number" name='montant' size='40' required> <br/>
        </div>
        <p/>
        <br/>
        <button class="btn btn-primary" type="submit">Transférer</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewInsert -->



<?php
