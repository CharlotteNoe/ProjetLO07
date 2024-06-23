
<!-- ----- début viewPDFCreate -->
<?php 
require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';

      $prenom=$personne[0]->getPrenom();
      $nom=$personne[0]->getNom()
              
      ?>
      
      <div class="mt-4 p-2 text-dark text-center bg-success rounded">
          <h4>
              Téléchargement des informations financière de <?php echo($prenom .' '.$nom) ;?>
          </h4>
      </div>
      <p/><br/>
      <div>
        <form action="../view/innovation/viewPDFCreated.php" method="get">
             <input type="hidden" name="compte" value='<?php echo($compte[0]) ?>'>
             <input type="hidden" name="residence" value='<?php echo($residence[0]) ?>'>
             <input type="hidden" name="nom" value='<?php echo($nom) ?>'>
             <input type="hidden" name="prenom" value='<?php echo($prenom) ?>'>
             <button class="btn btn-success" type="submit">Télécharger PDF</button>

        </form>
      </div>
      
      </div>

  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

  <!-- ----- fin viewPDFCreate -->
