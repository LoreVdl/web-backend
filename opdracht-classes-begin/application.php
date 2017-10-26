<?php
  function __autoload($classname)
  {
    include $classname . '-class.php';
  }

  $nummer = 150;
  $eenheid = 100;
  $percent = new Percent($nummer, $eenheid);
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht classes begin</title>
  </head>

  <body>
    <h1>Opdracht classes begin</h1>

    <table>
      <caption><?php echo "Hoe staat {$nummer} in verhouding tot {$eenheid}"?></caption>
      <tbody>
        <tr>
          <td>Relatief</td>
          <td><?php echo $percent->relative; ?></td>
        </tr>

        <tr>
          <td>Procentueel</td>
          <td><?= $percent->hundred ?></td>
        </tr>

        <tr>
          <td>Nominaal</td>
          <td><?= $percent->nominal ?></td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
