
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.html';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
    ?> 
      <h3>Login ou mot de passe incorrect</h3>
    <form role="form" method='get' action='router1.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='patrimoineConnected'>        
        <label class='w-25' for="login">Login : </label><input type="text" name='login' size='40' required> <br/>                          
        <label class='w-25' for="password">Password : </label><input type="password" name='password' size='40' required> <br/>
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin viewInsert -->



