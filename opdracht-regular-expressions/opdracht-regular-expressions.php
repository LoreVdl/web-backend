<?php
  if (isset($_POST["submit"]))
  {
    $reg = $_POST["regex"];
    $string = $_POST["string"];
    $regularExpression = '/' . $reg . '/';
    $searchString = $string;
    $replaceString = "<span>#</span>";
    $resultaat = preg_replace($regularExpression, $replaceString, $searchString);
  }
?>

<!doctype>
<html>
<head>
  <title>Regular expressions</title>
</head>
<body>
  <form action="" method="POST">
    <ul>
      <li>
          <label for="regex">Regular Expression</label>
          <input type="text" name="regex" id="regex" value= "<?php $reg ?>">
      </li>
      <li>
          <label for="string">String</label>
          <textarea name="string" id="string" cols="30" rows="10"><?php $searchString ?></textarea>
      </li>
  </ul>
  <input type = "submit" name = "submit" value = "submit">

  <p>Resultaat: <?php echo $resultaat ?></p>

  </form>
</body>
</html>
