<?php
$message = '';
if(isset($_POST['submit']))
{
  try
  {
    $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
    $brnaam = $_POST['brnaam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $gemeente = $_POST['gemeente'];
    $omzet = $_POST['omzet'];
    $queryString = 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet) VALUES :brnaam, :adres, :postcode, :gemeente, :omzet ';
    $statement = $db->prepare($queryString);
    $statement->bindValue(':brnaam', $brnaam);
    $statement->bindValue(':adres', $adres);
    $statement->bindValue(':postcode', $postcode);
    $statement->bindValue(':gemeente', $gemeente);
    $statement->bindValue(':omzet', $omzet);
    $statement->execute();
    $lastID = $db->lastInsertID();
    $message = "Gelukt! " . $lastID;
  }

  catch (PDOException $e)
  {
      $message = 'Er ging iets mis: ' . $e->getMessage();
  }
}
 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../foundation.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Brouwer Toevoegen</title>
  </head>
  <body>
    <h1>Voeg een brouwer toe</h1>
    <p><?= $message ?></p>
    <ul>
    <form method="post">
        <li><label for="brnaam">Brouwernaam</label>
        <input type="text" name="brnaam" value=""></li>
        <li><label for="adres">adres</label>
        <input type="text" name="adres" value=""></li>
        <li><label for="postcode">postcode</label>
        <input type="text" name="postcode" value=""></li>
        <li><label for="gemeente">gemeente</label>
        <input type="text" name="gemeente" value=""></li>
        <li><label for="omzet">omzet</label>
        <input type="text" name="omzet" value=""></li>
        <input class="button" type="submit" name="submit" value="Send">
      </form>
    </ul>
  </body>
</html>
