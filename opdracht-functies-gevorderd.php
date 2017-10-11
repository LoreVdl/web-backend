<?php
  $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
  $needle1 = "2";
	$needle2 = "8";
	$needle3 = "a";

  function telKarakters1 ($hashkey, $needle)
  {
    $aantalKarakters = strlen($hashkey);
    $needleAantal = substr_count($hashkey, $needle);
    $needleProcent = ($needleAantal / $aantalKarakters) * 100;
    return $needleProcent;

  }

  function telKarakters2($needle)
  {
    $hashkey = $GLOBALS['md5HashKey'];
    $aantalKarakters = strlen($hashkey);
    $needleAantal = substr_count($hashkey, $needle);
    $needleProcent = ($needleAantal / $aantalKarakters) * 100;
    return $needleProcent;
  }

  function telKarakters3($needle)
  {
    global $md5HashKey;
    $hashkey = $md5HashKey;
    $aantalKarakters = strlen($hashkey);
    $needleAantal = substr_count($hashkey, $needle);
    $needleProcent = ($needleAantal / $aantalKarakters) * 100;
    return $needleProcent;
  }

  $eersteMethode = telKarakters1( $md5HashKey, $needle1 );
  $tweedeMethode = telKarakters2( $needle2 );
  $derdeMethode =	telKarakters3( $needle3 );

?>

<!doctype html>
<html>
  <head>
    <title>Opdracht functions gevorderd </title>

  </head>
  <body>
    <h1>Opdracht functions gevorderd</h1>
    <p>Het karakter "<?php echo $needle1?>" komt <?php echo $eersteMethode?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $needle2?>" komt <?php echo $tweedeMethode?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $needle3?>" komt <?php echo $derdeMethode?>% voor in de string "<?php echo $md5HashKey ?>"</p>
  </body>
</html
