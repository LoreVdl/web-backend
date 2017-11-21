<?php
  $lettertje = "e";
  $cijfertje = 3;
  $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
  $langsteWoordVervang = str_replace($lettertje, $cijfertje, $langsteWoord);
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht: string extra functions</title>
  </head>

  <body>
    <h1>Opdracht: string extra functions deel 3</h1>

    <p><?php echo $langsteWoordVervang?></p>

  </body>
</html>
