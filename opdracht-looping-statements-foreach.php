<?php
  $text	=	file_get_contents( 'text-file.txt' );
  $textChars = str_split($text);
  rsort($textChars);
  $textCharsReverse = array_reverse($textChars);
  $diffChars = array();
  $tellerArray = array();

  for($i = 0; $i < count($textChars); $i++)
  {
    $inArray = in_array($textCharsReverse[$i], $diffChars);

    if ($i != $inArray)
    {
      $diffChars[] = $textCharsReverse[$i];
    }
  }

  foreach ($textCharsReverse as $value)
  {
    if ( isset ( $tellerArray[ $value ] ) )
		{
			++$tellerArray[ $value ];
		}
		else
		{
			$tellerArray[ $value ] = 1;
		}
  }

  $numberDiffChars = count($diffChars);


?>

<!doctype html>
<html>
  <head>
    <title>Opdracht looping statements foreach</title>

  </head>
  <body>
    <h1>Opdracht looping statements foreach</h1>
    <ul>
      <li>Aantal verschillende tekens: <?php echo $numberDiffChars?></li>
      <li><?php print_r($tellerArray)?></li>
    </ul>
  </body>
</html
