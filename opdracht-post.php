<?php
  $username = "Stijn";
  $password = "azerty";
  $message = "Gelieve in te loggen";

  if (isset($_POST["submit"]))
  {
    if($_POST['username'] == $username && $_POST['password'] == $password)
    {
      $message = "Welkom";
    }
    else
    {
      $message = "Er ging iets mis tijdens het inloggen. Probeer later opnieuw.";
    }
  }
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht post</title>
  </head>
  <body>
    <h1>Opdracht post</h1>
    <h2>Inloggen</h2>
    <p><?php echo $message?>

    <form action="Opdracht-post.php" method="POST">
      <ul>
        <li>
          <label for="username">Gebruikersnaam</label>
          <input type ="text" id="username" name="username" value="Stijn">
        </li>

        <li>
          <label for="password">Paswoord</label>
          <input type="text" id="password" name="password" value="azerty">
        </li>
      </ul>
      <input type="submit" name="submit" value="verzend">
    </form>
  </body>
</html>
