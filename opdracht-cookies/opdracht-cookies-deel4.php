<?php
  if (isset($_GET['logout'])) {
    setcookie('authenticated', '', time() -1000);
    header('location: opdracht-cookies-deel4.php');
  }

  $filecontent = file_get_contents('opdracht-cookies-deel4.txt');
  $userdata = JSON_decode($filecontent, true);
  $statusMessage = false;
  $isAtuthenticated = false;

  if (!isset($_COOKIE['authenticated'])) {

    if (isset($_POST['submit'])) {

      foreach($userdata as $id => $user) {

        if($_POST['username'] == $user["username"] && $_POST['password'] == $user["password"]) {

          if (isset($_POST['keepLogged'])) {
            $cookietime = time() + 30*24*60*60;
          }

          else {
            $cookietime = time() + 3600;
          }

          setcookie('authenticated', $id, $cookietime);
          header('location: opdracht-cookies-deel4.php');
          break;
        }
      }

      $statusMessage = 'Gebruikersnaam en/of paswoord niet correct probeer opnieuw.';
    }
  }
  else {
    $userid = $_COOKIE['authenticated'];
    $statusMessage = 'Hallo ' . $userdata[$userid]['username'] . ' fijn dat je er weer bent';
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
      <form action = 'opdracht-cookies-deel4.php' method = 'POST'>
        <ul>
          <li>
            <label for = 'username'>Gebruikersnaam: </label>
            <input type = 'text' name = 'username' id = 'username'>
          </li>

          <li>
            <label for = 'password'>Paswoord: </label>
            <input type = 'password' name = 'password' id = 'password'>
          </li>

          <li>
            <label for = 'keepLogged'>Mij onthouden </label>
            <input type = 'checkbox' name = 'keepLogged' id = 'keepLogged'>
          </li>

          <input type = 'submit' name = 'submit' value = 'login'>
        </ul>
      </form>
    <?php else: ?>
      <a href="opdracht-cookies-deel4.php?logout=true">Uitloggen</a>
    <?php endif ?>
  </body>
</html>
