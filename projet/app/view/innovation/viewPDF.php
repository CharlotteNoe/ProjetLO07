
<!-- ----- début viewPDF -->
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
              Téléchargement des informations d'un compte client
          </h4>
      </div>

    <form role="form" method='get' action='router1.php' class="mt-4 p-2 text-white bg-secondary rounded">
      <div class="form-group">
        <input type="hidden" name='action' value='innovationPDF'>
        <label for="client">Client : </label> <select class="form-control" id='client' name='client' style="width: 150px">
            <?php
            foreach ($results as $client) {
                $id_client=$client->getId();
                $prenom=$client->getPrenom();
                $nom=$client->getNom();
             echo ("<option value='$id_client'>$nom $prenom</option>");
            }
            ?>
        </select>
      </div>
      <p/><br/>
      <button class="btn btn-primary" type="submit">Télécharger PDF</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewPDF -->