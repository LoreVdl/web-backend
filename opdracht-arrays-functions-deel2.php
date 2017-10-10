<?php
  $dieren = array ("koala", "beer", "giraf", "leeuw", "aap");
  $sorteerDieren = $dieren;
  sort($sorteerDieren);

  $zoogdieren = array ("koe", "hond", "konijn");

  $dierenlijst = array_merge($dieren, $zoogdieren);
?>

<!doctype html>
<html>
  <head>Opdracht arrays functions</head>
  <body>
    <title>Opdracht arrays functios</title>

    <pre><?php print_r($sorteerDieren)?></pre>
    <pre><?php print_r($dierenlijst)?></pre>
  </body>
</html
