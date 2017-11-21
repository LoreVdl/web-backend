<?php
  $number = 1;

  if ($number == 1)
  {
    $day = "maandag";
  }

  if ($number == 2)
  {
    $day = "dinsdag";
  }

  if ($number == 3)
  {
    $day = "woensdag";
  }

  if ($number == 4)
  {
    $day = "donderdag";
  }

  if ($number == 5)
  {
    $day = "vrijdag";
  }

  if ($number == 6)
  {
    $day = "zaterdag";
  }

  if ($number == 7)
  {
    $day = "zondag";
  }

  $capital = strtoupper($day);
  $captilNotA = str_replace('A', 'a', $capital);
  $lastA = strrpos($capital, "A");
  $dag = substr_replace($capital, "a", $lastA, 1) #Vervang in $dag de letter door a, als de letter gelijk is aan de laatsteApositie voor 1 keer
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht string extra functies deel 1</title>
  </head>
  <body>
    <p>Het is vandaag <?php echo $day ?></p>
    <p>Het is vandaag <?php echo $capital ?></p>
    <p>Het is vandaag <?php echo $captilNotA ?></p>
    <p>Het is vandaag <?php echo $dag?></p>
  </body>
</html>
