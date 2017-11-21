<?php
  $cijfers = array (1, 2, 3, 4, 5);
  $product = array_product($cijfers);

  $cijfers2 = array (5, 4, 3, 2, 1);

  foreach ($cijfers as $value)
  {
    if ($value % 2 != 0)
    {
      $onevenCijfers[] = $value;
    }
  }

  foreach ($cijfers as $key => $number) // key is positie, number is het cijfer dat op die positie hoort
  {
    $getal1 = $cijfers[$key];
    $getal2 = $cijfers2[$key];
    $som[] = $getal1 + $getal2;
  }
?>

<!doctype html>
<html>
  <head>Opdracht arrays basis deel 2</head>
  <body>
    <title>Opdracht arrays basis deel 2</title>

    <p>Product van getallen: <?php echo $product ?></p>
    <pre><?php print_r($onevenCijfers)?></pre>
    <pre><?php print_r($som)?></pre>
  </body>
</html
