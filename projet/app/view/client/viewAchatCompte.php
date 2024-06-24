
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
            Achat d'une nouvelle résidence
        </h4>
    </div>

    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
        <div class="form-group">
            <input type="hidden" name='action' value='clientResidenceAchetee'>
            <p>Montant de la résidence : <?php echo ($montant) ?></p><br/>
            <input type="hidden" name="montant" value='<?php echo($montant) ?>'>
            <input type="hidden" name="id_residence" value='<?php echo($id_residence) ?>'>

            <label for="compteVendeur">Sélectionnez un compte du vendeur : </label> <select class="form-control" id='compteVendeur' name='compteVendeur' required style="width: 300px">
                <?php
                foreach ($results as $compte) {
                    $id_compte=htmlspecialchars($compte['id']);
                    $label_compte=htmlspecialchars($compte['compte_label']);
                    echo ("<option value='$id_compte'>$label_compte</option>");
                }
                ?>
            </select>
            <label for="compteAcheteur">Sélectionnez le compte où sera prélevé l'argent : </label> <select class="form-control" id='compteAcheteur' name='compteAcheteur' required style="width: 300px">
                <?php
                foreach ($results2 as $compte) {
                    $id_compte=htmlspecialchars($compte['id']);
                    $label_compte=htmlspecialchars($compte['compte_label']);
                    echo ("<option value='$id_compte'>$label_compte</option>");
                }
                ?>
            </select>
        </div>
        <p/>
        <br/>
        <button class="btn btn-success" type="submit">Confirmer la transaction</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewInsert -->



