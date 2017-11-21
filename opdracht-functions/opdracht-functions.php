<?php
  function berekenSom ($getal1, $getal2)
  {
    $resultaat = $getal1 + $getal2;
    return $resultaat;
  }

  function vermenigvuldig ($getal1, $getal2)
  {
    $resultaat = $getal1 * $getal2;
    return $resultaat;
  }

  function isEven ($getal)
  {
    if ($getal % 2 > 0)
    {
      return false;
    }
    return true;
  }

  function upperCase ($string)
  {
    $stringArray = str_split($string);
    $strinLengte = count($stringArray);
    $stringUpperCase = strtoupper($string);
    $resultaat = array ($strinLengte, $stringUpperCase);
    return $resultaat; 
  }
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht functions</title>

  </head>
  <body>
    <h1>Opdracht functions</h1>
    <ul>
      <li><?php echo berekenSom(1, 2)?></li>
      <li><?php echo vermenigvuldig(1, 2)?></li>
      <li><?php echo isEven(1)?></li>
      <li><?php echo isEven(8)?></li>
      <li><?php print_r(upperCase("Hallo ik ben Lore"))?></li>
    </ul>
  </body>
</html
