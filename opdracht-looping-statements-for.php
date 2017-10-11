<?php
  $rijen = 10;
  $kolommen = 10;
?>

<!doctype html>
<html>
  <head>Opdracht arrays functions</head>
  <body>
    <title>Opdracht arrays functios</title>

    <table>
      <?php for ($i = 0; $i < $rijen; $i++): ?>
        <tr>
          <?php for ($y = 0; $y < $kolommen; $y++): ?>
            <td>kolom</td>
          <?php endfor ?>
        </tr>
      <?php endfor ?>
    </table>
  </body>
</html
