<?php

$accounts = [
  $account1 = [
    'titular' => 'Michael',
    'saldo' => 10_000
  ],
  $account2 = [
    'titular' => 'Jim',
    'saldo' => 10_001
  ],
  $account3 = [
    'titular' => 'Oscar',
    'saldo' => 10_002
  ],
];

?>

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
