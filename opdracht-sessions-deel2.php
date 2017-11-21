<?php
  session_start();
  var_dump($_SESSION);
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht Sessions</title>
  </head>
  <body>
    <h1>Opdracht sessions</h1>
    <h2>Registratiegegevens</h2>
    <ul>
      <li>e-mail: <?= $_POST["email"]; ?></li>
      <li>nickname: <?php echo $_POST["nickname"]; ?></li>
    </ul>

    <form action="opdracht-sessions-deel3.php" method="POST">
      <ul>
        <li>
          <label for="straat">Straat</label>
          <input type="text" id="straat" value="<?= (isset($_SESSION['straat']) ? $_SESSION['straat'] : '') ?>" id="straat" required>
        </li>

        <li>
          <label for="nummer">Nummer</label>
          <input type="number" id="nummer" value="<?= (isset($_SESSION['nummer']) ? $_SESSION['nummer'] : '') ?>" required>
        </li>

        <li>
          <label for="gemeente">Gemeente</label>
          <input type="text" id="gemeente" value="<?= (isset($_SESSION['gemeente']) ? $_SESSION['gemeente'] : '') ?>" required>
        </li>

        <li>
          <label for="postcode">Postcode</label>
          <input type="text" id="postcode" value="<?= (isset($_SESSION['postcode']) ? $_SESSION['postcode'] : '') ?>" required>
        </li>
      </ul>

      <input type="submit" value="Volgende">
    </form>
  </body>
</html>
