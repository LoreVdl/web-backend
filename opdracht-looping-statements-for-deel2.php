<?php
  $maxTafels = 10;
  $maxProduct = 10;
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht looping statements for</title>
    <style>

			.oneven
			{
				background-color	:	lightgreen;
			}

		</style>
  </head>
  <body>
    <h1>Opdracht looping statements for</h1>

    <table>
      <?php for ($i = 0; $i <= $maxtafels; $i++): ?>
        <tr>
          <?php for ($y = 0; $y <= $maxProduct; $y++): ?>
            <td class="<?= ( ( $i * $y ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $i * $y ?></td>
          <?php endfor ?>
        </tr>
      <?php endfor ?>
    </table>
  </body>
</html
