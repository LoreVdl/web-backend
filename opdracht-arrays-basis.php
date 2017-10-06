<?php
  # $dieren = array ('aap', 'koala', 'koe', 'leeuw', 'tijger', 'olifant', 'giraf', 'zebra', 'kanarie', 'hamster');

  $dieren[] = 'aap';
  $dieren[] = 'koala';
  $dieren[] = 'koe';
  $dieren[] = 'leeuw';
  $dieren[] = 'tijger';
  $dieren[] = 'olifant';
  $dieren[] = 'giraf';
  $dieren[] = 'zebra';
  $dieren[] = 'kanarie';
  $dieren[] = 'hamster';

  $voertuigen['landvoertuig'] = array ('vespa', 'fiets');

  $voertuigen['watervoertuig'] = array ('surfplank', 'vlot', 'schoener', 'driemaster');

  $voertuigen['luchtvoertuigen'] = array ('luchtballon', 'vliegtuig', 'helicoter');
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht arrays basis</title>
  </head>

  <body>
    <h1>Opdracht arrays basis</h1>
    <pre><?php var_dump($voertuigen)?></pre>
</html>
