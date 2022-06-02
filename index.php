<?php require 'accounts.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>PHP</title>
  </head>
  <body>
    <section class="gridContainer">
      <?php foreach ($accounts as $key => $value) { ?>
        <div class="clientCard gridSubContainer">
          <p class="gridElement"> <?= $value['titular'] ?> </p>
          <p class="gridElement"> <?= "Saldo: {$value['saldo']}"  ?> </p>
        </div>
      <?php } ?>
    </section>
  </body>
</html>
