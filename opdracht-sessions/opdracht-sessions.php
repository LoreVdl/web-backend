<?php
  session_start();
  $message = 'Vul alle velden in';

  if (isset($_POST['email']) && isset($_POST['nickname']))
  {
    $_SESSION['emailAddress'] = $_POST['email'];
    $_SESSION['usernickname'] = $_POST['nickname'];
  }

  if (isset($_GET['session']))
  {
    if ($_GET['session'] == 'destroy')
    {
      session_destroy();
      header('location: opdracht-sessions.php');
    }
  }

  print_r($_SESSION);
?>

<!doctype html>
<html>
  <head>
    <title>Registratie formulier</title>
  </head>

  <body>
    <h1>Registratiepagina</h1>

    <p><?php echo $message ?></p>

    <form action = 'opdracht-sessions-deel2.php' method = 'POST'>
      <ul>
        <li>
          <label for = 'email'>e-mail</label>
          <input type = 'text' name = 'email' id = 'email' value = '<?= (isset($_SESSION['emailAddress']) ? $_SESSION['emailAddress'] : '')?>' required>
        </li>

        <li>
          <label for = 'nickname'>nickname</label>
          <input type = 'text' name = 'nickname' id = 'nickname' value = '<?= (isset($_SESSION['usernickname']) ? $_SESSION['usernickname'] : '')?>'required>
        </li>
      </ul>
      <input type = 'submit' name = 'submit' value = 'Volgende'>
    </form>
  </body>
</html>
