<?php
  $maxTafels = 10;
  $maxProduct = 10;
  $tafelsArray = array();

  for ($i = 0; $i <= $maxTafels; $i++)
  {
    $productenArray = array();
    for ($y = 0; $y <= $maxProduct; $y++)
    {
      $productenArray[] = $y * $i;
    }

    $tafelsArray[$i] = $productenArray;
  }


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
      <?php foreach ($tafelsArray as $productenArray): ?>
        <tr>
          <?php foreach ($productenArray as $product): ?>
            <td class="<?= ($product % 2 != 0)? 'oneven' : ''?>"<?= $product ?></td>
          <?php endforeach?>
        </tr>
      <?php endforeach ?>

      <pre><?php print_r($tafelsArray)?></pre>
    </table>
  </body>
</html
