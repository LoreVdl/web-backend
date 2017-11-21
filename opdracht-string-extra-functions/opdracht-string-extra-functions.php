<?php
  $fruit = "kokosnoot";
  $aantalKaraktersFruit = strlen($fruit);
  $letter = "o";
  $positieLetter = strpos($fruit, $letter);
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht: string extra functions</title>
  </head>

  <body>
    <h1>Opdracht: string extra functions deel 1</h1>

    <p>Aantal letters in <?php echo $fruit ?>: <?php echo $aantalKaraktersFruit?></p>

    <p>De positie van de eerste "<?php echo $letter?>" in "<?php echo $fruit?>" is: <?php echo $positieLetter?></p>
  </body>
</html>
