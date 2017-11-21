<?php
  function drukArrayAf ($array)
  {
    $resultaatArray = array();
    end ($GLOBALS);
    $naamArray = key ($GLOBALS);
    foreach ($array as $key => $value)
    {
      $resultaatArray[] = $naamArray . '[' . $key . '] heeft als waarde ' . $value;
    }
    return $resultaatArray;
  }

  function validateHtlmTag ($html)
  {
    $openTag = "<html>";
    $closeTag = "</html>";

    if (strpos($html, $openTag) !==FALSE)
    {
      if (strpos($html, $closeTag) !== FALSE)
      {
        $resultaat = "Deze string is geldig";
      }
      else
      {
        $resultaat = "Deze string is niet geldig";
      }
    }
    else
    {
      $resultaat = "Deze string is niet geldig";
    }
    return $resultaat;
  }
?>

<!doctype html>
<html>
  <head>
    <title>Opdracht functions</title>

  </head>
  <body>
    <h1>Opdracht functions</h1>
    <ul>
      <?php $helden = array ('Eron Musk', 'Spiderman')?>
      <li><?php print_r(drukArrayAf($helden))?></li>

      <?php $str = "<html>hahaha</html>"?>
      <?php $str2 = "<html>hahaha<html>"?>

      <li><?php echo validateHtlmTag($str)?></li>
      <li><?php echo validateHtlmTag($str2)?></li>

    </ul>
  </body>
</html
