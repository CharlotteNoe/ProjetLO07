
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

    <form role="form" method='get' action='router1.php'>
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
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewBanque -->