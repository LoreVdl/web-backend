<?php
  $cijfer = 6;

  switch ($cijfer)
  {
    case 1:
      $antwoord = "maandag";
      break;

    case 2:
      $antwoord = "dinsdag";
      break;

    case 3:
      $antwoord = "woensdag";
      break;

    case 4:
      $antwoord = "donderdag";
      break;

    case 5:
      $antwoord = "vrijdag";
      break;

    case 6:
      $antwoord = "zaterdag";
      break;

    case 7:
      $antwoord = "zondag";
      break;

    default:
      $antwoord = "onbekende dag";
  }
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht conditional statement switch</title>
  </head>

  <body>
    <h1>Opdracht conditional statement switch</h1>

    <p>Het is vandaag <?php echo $antwoord?></p>
  </body>
</html>
