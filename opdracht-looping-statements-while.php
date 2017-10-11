<?php
  $number = 0;
  $getallen = array();

  while($number >= 0 && $number <= 100)
  {
    $getallen[] = $number;
    $number++;
  }

  $resultaat = implode(', ', $getallen);

  $number2 = 0;
  $getallen2 = array();

  while ($number2 < 100)
  {
    if ($number2 % 3 == 0 && $number2 > 40 && $number2 < 80)
    {
      $getallen2[] = $number2;
    }
    $number2++;
  }

  $resultaat2 = implode(', ', $getallen2);
?>

<!doctype html>
<html>
  <head>Opdracht arrays functions</head>
  <body>
    <title>Opdracht arrays functios</title>

    <p><?php echo $resultaat?></p>
    <p><?php echo $resultaat2?></p>
  </body>
</html
