<?php
  $cijfers = array (8, 7, 8, 7, 3, 2, 1, 2, 4);
  $enkelCijfer = array_unique($cijfers);
  $sorteerCijfers = $enkelCijfer;
  rsort($sorteerCijfers)
?>

<!doctype html>
<html>
  <head>Opdracht arrays functions</head>
  <body>
    <title>Opdracht arrays functios</title>

    <pre><?php print_r($sorteerCijfers)?></pre>
  </body>
</html
