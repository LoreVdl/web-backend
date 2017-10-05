<?php
  $cijfer = 1;

  if ($cijfer == 1)
  {
    $dag = "maandag";
  }

  if ($cijfer == 2)
  {
    $dag = "dinsdag";
  }

  if ($cijfer == 3)
  {
    $dag = "woensdag";
  }

  if ($cijfer == 4)
  {
    $dag = "donderdag";
  }

  if ($cijfer == 5)
  {
    $dag = "vrijdag";
  }

  if ($cijfer == 6)
  {
    $dag = "zaterdag";
  }

  if ($cijfer == 7)
  {
    $dag = "zondag";
  }
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht: conditional statements if</title>
  </head>

  <body>
    <h1>Opdracht: conditional statements if deel 1</h1>

    <p>Vandaag is het <?php echo ($cijfer == 4) ? $dag : ".";?></p>
    <p>Vandaag is het <?php echo ($cijfer == 1) ? $dag : ".";?></p>

  </body>
</html>
