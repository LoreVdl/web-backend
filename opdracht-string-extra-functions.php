<?php
  $fruit = "kokosnoot";
  $aantalKaraktersFruit = strlen($fruit);
  $letter = "o";
  $positieLetter = strpos($fruit, $letter);

  $fruit2 = "ananas";
  $letter2 = "a";
  $positieLetter2 = strrpos($fruit2, $letter2);
  $fruit2 = strtoupper($fruit2);

  $lettertje = "e";
  $cijfertje = 3;
  $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
  $langsteWoordVervang = str_replace($lettertje, $cijfertje, $langsteWoord);



?>

<!doctype html>
<html>
  <head>Opdracht: string extra functions</head>

  <body>
    <h1>Opdracht: string extra functions deel 1</h1>

    <p>Aantal letters in <?php echo $fruit ?>: <?php echo $aantalKaraktersFruit?></p>

    <p>De positie van de eerste "<?php echo $letter?>" in "<?php echo $fruit?>" is: <?php echo $positieLetter?></p>

    <h1>opdracht: string extra functions deel 2</h1>

    <p>De laatste positie van de "<?php echo $letter2?>" in "<?php echo $fruit2?>" is: <?php  echo $positieLetter2?></p>

    <h1>opdracht: string extra functions deel 3</h1>

    <p><?php echo $langsteWoordVervang?></p>



  </body>
</html>
