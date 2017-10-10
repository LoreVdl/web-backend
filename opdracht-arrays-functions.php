<?php
  $dieren = array ("aap", "beer", "giraf", "koala", "leeuw");
  $aantalDieren = count($dieren);
  $teZoekenDier = "giraf";
  $gevondenDier = in_array($teZoekenDier, $dieren);

  if ($gevondenDier)
  {
    $resultaat = $teZoekenDier . " is gevonden in de lijst van dieren.";
  }
  else
  {
    $resultaat = $teZoekenDier . " is niet gevonden in de lijst van dieren.";
  }
?>

<!doctype html>
<html>
  <head>Opdracht arrays functions</head>
  <body>
    <title>Opdracht arrays functios</title>

    <p>Aantal dieren: <?php echo $aantalDieren?></p>
    <p><?php echo $resultaat?></p>
  </body>
</html
