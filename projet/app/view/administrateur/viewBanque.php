
<!-- ----- début viewBanque -->
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
              Choix d'une banque pour en voir ses client.e.s
          </h4>
      </div>

    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
      <div class="form-group">
        <input type="hidden" name='action' value='administrateurReadCompte'>
        <label for="banque">Banque : </label> <select class="form-control" id='banque' name='banque' style="width: 150px">
            <?php
            foreach ($results as $banque) {
                $id_banque=$banque->getId();
                $label_banque=$banque->getLabel();
             echo ("<option value='$id_banque'>$label_banque</option>");
            }
            ?>
        </select>
      </div>
      <p/><br/>
      <button class="btn btn-success" type="submit">Valider le choix</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewBanque -->