
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

    <div class="mt-4 p-2 text-dark text-center bg-success rounded">
        <h4>
            Transfert inter-compte
        </h4>
    </div>

    <div class="mt-4 p-2 text-white text-center bg-danger rounded">
        <h4>
            Vous devez obligatoirement sélectionner deux comptes bancaires différents
        </h4>
    </div>

    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
        <div class="form-group">
            <input type="hidden" name='action' value='clientTransfertInterCompteFait'>
            <label for="compteMoins">Sélectionnez le compte d'où part l'argent : </label> <select class="form-control" id='compteMoins' name='compteMoins' style="width: 150px">
                <?php
                foreach ($results as $compte) {
                    $id_compte=$compte->getId();
                    $label_compte=$compte->getLabel();
                    echo ("<option value='$id_compte'>$label_compte</option>");
                }
                ?>
            </select>
            <label for="comptePlus">Sélectionnez le compte où arrive l'argent : </label> <select class="form-control" id='comptePlus' name='comptePlus' style="width: 150px">
                <?php
                foreach ($results as $compte) {
                    $id_compte=$compte->getId();
                    $label_compte=$compte->getLabel();
                    echo ("<option value='$id_compte'>$label_compte</option>");
                }
                ?>
            </select>
            <label class='w-25' for="montant">Montant transféré : </label><input type="number" name='montant' size='40' required> <br/>
        </div>
        <p/>
        <br/>
        <button class="btn btn-success" type="submit">Transférer</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewInsert -->