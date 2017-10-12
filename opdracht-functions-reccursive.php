<?php
  $hansErfenis = 100;
  $rente = 8;
  $aantalJaar = 10;


  function kapitaalBerekenen ($kapitaal, $renteProcent, $jaren)
  {
    static $startJaar = 1;
    static $antwoordArray = array();

    if ($startJaar <= $jaren)
    {
      $rentebedrag = $kapitaal * ($renteProcent / 100);
      $afgerondBedrag = floor($rentebedrag);
      $nieuwKapitaal = $kapitaal + $afgerondBedrag;
      $antwoordArray[$startJaar] = "Het nieuwe bedrag is: " . $nieuwKapitaal . " euro met als rente " . $afgerondBedrag. " euro";

      $startJaar++;

      return kapitaalBerekenen($nieuwKapitaal, $renteProcent, $jaren);
    }
    else
    {
      return $antwoordArray;
    }
  }

$winst = kapitaalBerekenen($hansErfenis, $rente, $aantalJaar)
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht functions recursive</title>

  </head>
  <body>
    <h1>Opdracht functions recursive</h1>

    <ul>
      <?php foreach ($winst as $value): ?>
        <li><?php echo $value ?></li>
      <?php endforeach ?>
  </ul>
  </body>
</html
