<?php
  $timestamp = mktime(22, 35, 25, 1, 21, 1904);
  $date = date("d F Y, h:i:s a", $timestamp);
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht Date</title>
  </head>
  <body>
    <h1>Opdracht date</h1>
    <p><?php echo $timestamp?></p>
    <p><?php echo $date?></p>
  </body>
</html>
