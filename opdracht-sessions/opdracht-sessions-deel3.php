<?php
  session_start();

  if (isset($_POST['submit']))
  {
    $_SESSION['straat'] = $_POST['straat'];
    $_SESSION['nummer'] = $_POST['nummer'];
    $_SESSION['gemeente'] = $_POST['gemeente'];
    $_SESSION['postcode'] = $_POST['postcode'];
  }

  print_r($_SESSION);
?>

<!doctype html>
<html>
  <head>
    <title>Registratie formulier</title>
  </head>

  <body>
    <h1>Overzichtspagina</h1>
    <a href = "opdracht-sessions.php?session=destroy"> vernietig sessie</a>

    <ul>
      <li>e-mail: <?php echo $_SESSION['emailAddress']?> <a href = 'opdracht-sessions.php'>wijzig</a></li>
      <li>nickname: <?php echo $_SESSION['usernickname']?> <a href = 'opdracht-sessions.php'>wijzig</a></li>
      <li>straat: <?php echo $_SESSION['straat']?> <a href = 'opdracht-sessions-deel2.php'>wijzig</a></li>
      <li>nummer: <?php echo $_SESSION['nummer']?> <a href = 'opdracht-sessions-deel2.php'>wijzig</a></li>
      <li>gemeente: <?php echo $_SESSION['gemeente']?> <a href = 'opdracht-sessions-deel2.php'>wijzig</a></li>
      <li>postcode: <?php echo $_SESSION['postcode']?> <a href = 'opdracht-sessions-deel2.php'>wijzig</a></li>
    </ul>
  </body>
</html>
