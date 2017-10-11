<?php
  $boodschappenlijstje = array ('melk', 'water', 'eieren', 'suiker');
  $boodschappenLengte = 0;
  $aantalBoodschappen = count($boodschappenlijstje);
?>

<!doctype html>
<html>
  <head>Opdracht arrays functions</head>
  <body>
    <title>Opdracht arrays functios</title>

    <ul>
      <?php while ($boodschappenLengte < $aantalBoodschappen):?>
      
        <li><?php echo $boodschappenlijstje[$boodschappenLengte]?></li>
        <?php $boodschappenLengte++ ?>

    <?php endwhile ?>
    </ul>
  </body>
</html
