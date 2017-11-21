<?php
  $minuut = 60;
  $uur = $minuut * 60;
  $dag = $uur * 24;
  $week = $dag * 7;
  $maand = $dag * 31;
  $jaar = $dag * 365;

  $aantalSeconden = 221108521;

  $aantalMinuten = floor($aantalSeconden / $minuut);
  $aantalUren = floor($aantalSeconden / $uur);
  $aantalDagen = floor($aantalSeconden / $dag);
  $aantalWeken = floor($aantalSeconden / $week);
  $aantalMaanden = floor($aantalSeconden / $maand);
  $aantalJaren =floor ($aantalSeconden / $jaar);
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht conditional statements if else deel 2</title>
  </head>

  <body>
    <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

    <ul>
      <li>Minuten: <?php echo $aantalMinuten?></li>
      <li>Uren: <?php echo $aantalUren?></li>
      <li>Dagen: <?php echo $aantalDagen?></li>
      <li>Weken: <?php echo $aantalWeken?></li>
      <li>Maanden: <?php echo $aantalMaanden?></li>
      <li>Jaren: <?php echo $aantalJaren?></li>
    </ul>
  </body>
</html>
