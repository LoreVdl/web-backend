<?php
  session_start();
  var_dump($_SESSION);

  if(isset($_POST['adres']))
  {
    $_SESSION['straat'] = $_POST['straat'];
    $_SESSION['nummer'] = $_POST['nummer'];
    $_SESSION['gemeente'] = $_POST['gemeente'];
    $_SESSION['postcode'] = $_POST['postcode'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Opdracht Sessions</title>
  </head>
  <body>
    <h2>Opdracht sessions deel2</h2>
    <ul>
      <li>e-mail: <?= $_SESSION['email'];?> " " <a href="opdracht-sessions.php">wijzig</a></li>
      <li>nickname: <?= $_SESSION['nickname'];?> " " <a href="opdracht-sessions.php">wijzig</a></li>
      <li>straat: <?= $_SESSION['straat']; ?> " " <a href="opdracht-sessions-deel2.php">wijzig</a></li>
      <li>nummer: <?= $_SESSION['nummer']; ?> " " <a href="opdracht-sessions-deel2.php">wijzig</a></li>
      <li>gemeente: <?= $_SESSION['gemeente']; ?> " " <a href="opdracht-sessions-deel2.php">wijzig</a></li>
      <li>postcode: <?= $_SESSION['postcode']; ?> " " <a href="opdracht-sessions-deel2.php">wijzig</a></li>
    </ul>

  </body>
</html>
