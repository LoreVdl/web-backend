<?php
  $text	=	file_get_contents( 'text-file.txt' );
  $text = strtolower($text);
  $text =
  $textChars = str_split($text);
  rsort($textChars);
  $textCharsReverse = array_reverse($textChars);
  $diffChars = array();
  $tellerArray = array();
  foreach ($textCharsReverse as $value)
  {
    if (ctype_lower($value))
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
      <li><?php print_r($tellerArray)?></li>
    </ul>
  </body>
</html
