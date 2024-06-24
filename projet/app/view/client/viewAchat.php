
<!-- ----- début viewAchat -->

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
            <input type="hidden" name='action' value='clientResidenceAchatCompte'>
            <label for="residence">Sélectionnez une résidence : </label> <select class="form-control" id='residence' name='residence' style="width: 300px">
                <?php
                foreach ($results as $residence) {
                    $id_residence=htmlspecialchars($residence['id']);
                    $label_residence=htmlspecialchars($residence['label']);
                    $ville_residence=htmlspecialchars($residence['ville']);
                    echo ("<option value='$id_residence'>$label_residence ( $ville_residence )</option>");
                }
                ?>
            </select>
        </div>
        <p/>
        <br/>
        <button class="btn btn-success" type="submit">Acheter la résidence</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewAchat -->



