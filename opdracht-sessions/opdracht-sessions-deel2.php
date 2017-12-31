<?php
  session_start();

  if (isset($_POST['submit']))
  {
    $_SESSION['emailAddress'] = $_POST['email'];
    $_SESSION['usernickname'] = $_POST['nickname'];
  }

  if (isset($_POST['email']) && isset($_POST['nummer']) && isset($_POST['gemeente']) && isset($_POST['postcode']))
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
    <h1>Registratiegegevens</h1>

    <a href = "opdracht-sessions.php?session=destroy"> vernietig sessie</a>

    <ul>
      <li>e-mail: <?php echo $_SESSION['emailAddress']?></li>
      <li>nickname: <?php echo $_SESSION['usernickname']?></li>
    </ul>

    <h2>Adres</h2>

    <form action = 'opdracht-sessions-deel3.php' method = 'POST'>
      <ul>
        <li>
          <label for = 'straat'>straat</label>
          <input type = 'text' name = 'straat' id = 'straat' value = '<?= (isset($_SESSION['straat']) ? $_SESSION['straat'] : '')?>'required>
        </li>

        <li>
          <label for = 'nummer'>nummer</label>
          <input type = 'number' name = 'nummer' id = 'nummer' value = '<?= (isset($_SESSION['nummer']) ? $_SESSION['nummer'] : '')?>'required>
        </li>

        <li>
          <label for = 'gemeente'>gemeente</label>
          <input type = 'text' name = 'gemeente' id = 'gemeente' value = '<?= (isset($_SESSION['gemeente']) ? $_SESSION['gemeente'] : '')?>'required>
        </li>

        <li>
          <label for = 'postcode'>postcode</label>
          <input type = 'text' name = 'postcode' id = 'postcode' value = '<?= (isset($_SESSION['postcode']) ? $_SESSION['postcode'] : '')?>'required>
        </li>
      </ul>

      <input type = 'submit' name = 'submit' value = 'Volgende'>
    </form>

  </body>
</html>
