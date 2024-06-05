
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <?php
                foreach ($results[0] as $cols) {
                    echo"<th>$cols</th>";
                }
           ?>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($results[1] as $datas) {
              echo("<tr>");
              foreach ($datas as $value) {
                  echo("<td>$value</td>");
              }
              echo("</tr>");
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  