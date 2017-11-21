<?php
  setlocale('LC_ALL', 'nl_NL');
  $timestamp = mktime(22, 35, 25, 1, 21, 1904);
  $date = strftime("%d %B %Y, %I:%M:%S %p", $timestamp);
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
