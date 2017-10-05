<?php
  $jaartal = 700;

  if ($jaartal % 4 == 0)
  {
    if ($jaartal % 100 == 0)
    {
      if ($jaartal % 400 == 0)
      {
        $antwoord = " is wel een schrikkeljaar.";
      }
      else
      {
        $antwoord = " is geen schrikkeljaar.";
      }
    }
    else
    {
      $antwoord = " is wel een schrikkeljaar";
    }
  }
  else
  {
    $antwoord = " is geen schrikkeljaar";
  }
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht conditional statements if else</title>
  </head>

  <body>
    <h1>Opdracht conditional statements if else</h1>

    <p>Het jaar <?php echo $jaartal; echo $antwoord?></p>
  </body>
</html>
