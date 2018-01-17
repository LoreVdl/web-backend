<?php
  if (isset($_GET['logout'])) {
    setcookie('authenticated', '', time() -1000);
    header('location: opdracht-cookies.php');
  }

  $filecontent = file_get_contents('cookies.txt');
  $userdata = explode(',', $filecontent);
  $statusMessage = false;
  $isAtuthenticated = false;

  if (!isset($_COOKIE['authenticated'])) {
    if (isset($_POST['submit'])) {
      if($_POST['username'] == $userdata[0] && $_POST['password'] == $userdata[1]) {
        setcookie('authenticated', true, time() + 3600);
        header('location: opdracht-cookies.php');
      }
      else {
        $statusMessage = 'Gebruikersnaam en/of paswoord niet correct probeer opnieuw.';
      }
    }
  }
  else {
    $statusMessage = 'U bent ingelogd';
    $isAtuthenticated = true;
  }
?>

<!doctype html>
<html>
  <head>
    <title>Inloggen</title>
  </head>

  <body>
    <h1>Inloggen</h1>
    <?php if ($statusMessage): ?>
      <?= $statusMessage ?>
    <?php endif ?>

    <?php if (!$isAtuthenticated): ?>
      <form action = 'opdracht-cookies.php' method = 'POST'>
        <ul>
          <li>
            <label for = 'username'>Gebruikersnaam: </label>
            <input type = 'text' name = 'username' id = 'username'>
          </li>

          <li>
            <label for = 'password'>Paswoord: </label>
            <input type = 'password' name = 'password' id = 'password'>
          </li>

          <input type = 'submit' name = 'submit' value = 'login'>
        </ul>
      </form>
    <?php else: ?>
      <a href="opdracht-cookies.php?logout=true">Uitloggen</a>
    <?php endif ?>
  </body>
</html>
