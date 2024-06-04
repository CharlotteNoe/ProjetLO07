 
<!-- ----- debut de la page patrimoine_acceuil -->
<?php 
include 'fragment/fragmentPatrimoineHeader.html'; 
?>
<h3></h3>
<body>
  <div class="container">
    <?php
    /*
        if ($_SESSION['statut']==0){
            include 'fragment/fragmentAdministrateurMenu.php';
        }else if ($_SESSION['statut']==1){
            include 'fragment/fragmentClientMenu.php';
        }
        
    else {*/
        include 'fragment/fragmentPatrimoineMenu.php';
    //}
    
    include 'fragment/fragmentPatrimoineJumbotron.html';
    ?>
  </div>   
  
  
  <?php
  include 'fragment/fragmentPatrimoineFooter.html';
  ?>

  <!-- ----- fin de la page patrimoine_acceuil -->

</body>
</html>