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

    <form action="opdracht-sessions-deel2.php" method="POST">
      <ul>
        <li>
          <label for="email">Email</label>
          <input type="text" name="email" id="email" value="<?= (isset($_SESSION["email"]) ? $_SESSION["email"] : '') ?>" required>
        </li>
        <li>
          <label for="nickname">Nickname</label>
          <input type="text" name="nickname" id="nickname" value="<?= (isset($_SESSION["nickname"]) ? $_SESSION["nickname"] : '') ?>" required>
        </li>
      </ul>
      <input type="submit" value="volgende">
    </form>
  </body>
</html>
