<?php
  $pigHealth = 5;
  $maximumThrows = 8;

  $resultaat = array();

  function calculateHit()
  {
    global $pigHealth;
    $hitArray = array();
    $message = '';
    $raakkans = rand(1,10);

    if ($pigHealth < 0)
    {
        $pigHealth = 0;
    }

    if ($raakkans <= 4)
    {
      $pigHealth --;

      if ($pigHealth == 1)
      {
        $hitArray['message'] = "Raak er is nog maar " . $pigHealth . " varkens over";
      }
      else
      {
        $hitArray['message'] = "Raak er zijn nog maar " . $pigHealth . " varkens over";
      }
    }
    else
    {
      if ($pigHealth == 1)
      {
        $hitArray['message'] = "Mis er is nog maar " . $pigHealth . " varkens over";
      }
      else
      {
        $hitArray['message'] = "Mis er zijn nog maar " . $pigHealth . " varkens over";
      }
    }
    return $hitArray;
  }

  function launghAngryBird()
  {
    static $functionCalled = 0;
    global $maximumThrows;
    global $pigHealth;
    global $resultaat;

    if ($functionCalled < $maximumThrows && $pigHealth != 0)
    {
      $hitResult = calculateHit();
      $functionCalled ++;
      $resultaat[] = $hitResult['message'];
      launghAngryBird();
    }
    else
    {
      if ($pigHealth > 0)
      {
        $resultaat[] = 'Helaas je hebt verloren';
      }
      else
      {
        $resultaat[] = "Goed zo je hebt gewonnen!!";
      }
    }
  }

  launghAngryBird();
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht looping statements for</title>
  </head>
  <body>
    <h1>Opdracht functies gevorderd deel 2</h1>
    <?php foreach ($resultaat as $value): ?>
      <p><?php echo $value?>
    <?php endforeach?>

  </body>
</html
