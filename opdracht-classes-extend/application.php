<?php
function autoload($class)
{
  require_once($class . ".php");
}
spl_autoload_register("autoload");
$extraHealth = 50;
$Eagle = new Animal("Eagle","male",100);
$WhiteTiger = new Animal("White Tiger","male",200);
$goldfish = new Animal("Goldfish","male",100);
$simba	=	new Lion("Simba", "male", 300, "Congo lion");
$scar	=	new Lion("Scar", "female", 280, "Kenia lion");
$zeke = new Zebra("Zeke","female",20,"Quagga");
$zana = new Zebra("Zana","female",50,"Selous");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Instanties van de Animal class</h1>
    <p><?= $Eagle->getName(); ?> is van het geslacht <?= $Eagle->getGender(); ?> en heeft momenteel <?= $Eagle->changeHealth($extraHealth); ?>  levenspunten (special move: <?= $Eagle->doSpecialMove(); ?>)</p>
    <p><?= $WhiteTiger->getName(); ?> is van het geslacht <?= $WhiteTiger->getGender(); ?> en heeft momenteel <?= $WhiteTiger->getHealth(); ?>  levenspunten (special move: <?= $WhiteTiger->doSpecialMove(); ?>)</p>
    <p><?= $goldfish->getName(); ?> is van het geslacht <?= $goldfish->getGender(); ?> en heeft momenteel <?= $goldfish->getHealth(); ?>  levenspunten (special move: <?= $goldfish->doSpecialMove(); ?>)</p>

    <h1>Instanties van de Lion class</h1>
    <p>De speciale move van <?= $simba->getName(); ?> (soort: <?= $simba->getSpecies(); ?>): <?= $simba->doSpecialMove(); ?></p>
    <p>De speciale move van <?= $scar->getName(); ?> (soort: <?= $scar->getSpecies(); ?>): <?= $scar->doSpecialMove(); ?></p>

    <h1>Instanties van de Zebra class</h1>
    <p>De speciale move van <?=$zeke->getName();?>(soort: <?= $zeke->getSpecies();?>): <?= $zeke->doSpecialMove()?></p>
    <p>De speciale move van <?=$zana->getName();?>(soort: <?= $zana->getSpecies();?>): <?= $zana->doSpecialMove()?></p>

  </body>
</html>
