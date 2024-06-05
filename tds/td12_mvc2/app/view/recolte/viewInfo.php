
<!-- ----- début viewInfo -->
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

      // $results contient un tableau avec la liste des clés.
      ?>

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='recolteInsert'>
        <label for="vin_id">Sélectionnez un vin: </label> <select class="form-control" id='vin_id' name='vin_id' style="width: 500px">
            <?php
            foreach ($vins as $vin) {
             echo ("<option value='{$vin['id']}'>{$vin['id']} {$vin['cru']} {$vin['annee']}</option>");
            }
            ?>
        </select>
        <label for="producteur_id">Sélectionnez un producteur : </label> <select class="form-control" id='producteur_id' name='producteur_id' style="width: 500px">
            <?php
            foreach ($producteurs as $producteur) {
             echo ("<option value='{$producteur['id']}'>{$producteur['id']} {$producteur['nom']} {$producteur['prenom']} {$producteur['region']}</option>");
            }
            ?>
        </select>
        <label for="quantite">quantite : </label> </br>
        <input type="number" id="quantite" name="quantite"/>
      </div>
      <p/><br/>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewInfo -->