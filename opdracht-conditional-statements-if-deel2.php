<?php
  $cijfer = 2;
  $dag = "Onbekende dag";

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

  $dag = strtoupper($dag);
  $laatsteApositie = strrpos($dag, "A");
  $dag = substr_replace($dag, "a", $laatsteApositie, 1) #Vervang in $dag de letter door a, als de letter gelijk is aan de laatsteApositie voor 1 keer
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht: conditional statements if deel 2</title>
  </head>

  <body>
    <h1>Opdracht: conditional statements if deel 2</h1>

    <p>Vandaag is het <?php echo ($cijfer == 2) ? $dag : ".";?></p>

  </body>
</html>
