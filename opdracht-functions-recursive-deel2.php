<?php
  function kapitaalBerekenen ($kapitaalArray)
  {
    if ($kapitaalArray['startjaar'] <= $kapitaalArray ['jaren'])
    {
      $rentebedrag = floor($kapitaalArray['kapitaal'] * ($kapitaalArray['renteprocent'] / 100));
      $kapitaalArray['kapitaal'] += $rentebedrag;
      $kapitaalArray['antwoordArray'][$kapitaalArray['startjaar']] = 'Het nieuwe bedrag is: ' . $kapitaalArray['kapitaal'] . ' euro met als rente ' . $rentebedrag . ' euro';

      ++$kapitaalArray['startjaar'];

      print_r($kapitaalArray);

      return kapitaalBerekenen($kapitaalArray);
    }
    else
    {
      return $kapitaalArray;
    }
  }

$hansErfenis = 100;
$rente = 8;
$aantalJaar = 10;

$winst = kapitaalBerekenen(array('kapitaal' => $hansErfenis, 'renteprocent' => $rente, 'jaren' => $aantalJaar, 'startjaar' => 1, 'antwoordArray' => array()));
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht functions recursive</title>

  </head>
  <body>
    <h1>Opdracht functions recursive</h1>

    <ul>
      <?php foreach ($winst['antwoordArray'] as $value): ?>
        <li><?php echo $value ?></li>
      <?php endforeach ?>
  </ul>
  </body>
</html
