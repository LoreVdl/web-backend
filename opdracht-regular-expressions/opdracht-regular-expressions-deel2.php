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
          <input type="text" name="regex" id="regex" value= "<?php if (isset($reg)) echo $reg?>">
      </li>
      <li>
          <label for="string">String</label>
          <textarea name="string" id="string" cols="30" rows="10"><?php if (isset($searchString)) echo $searchString?></textarea>
      </li>
  </ul>
  <input type = "submit" name = "submit" value = "submit">

  <?php if (isset($resultaat)) : ?>
    <p>Resultaat: <?php echo $resultaat ?></p>
  <?php endif;?>
  </form>

  <ul>
    <li>
    Match alle letters tussen a en d, en u en z (hoofdletters inclusief)
    <ul>
      <li>String: Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.</li>
      <li>Regular Expression: [a-dA-Du-zU-Z]</li>
      <li>Resultaat: Memor# ##n #h#nge the sh#pe of # room; it ##n #h#nge the #olor of # ##r. #n# memories ##n #e #istorte#. The#'re j#st #n interpret#tion, the#'re not # re#or#, #n# the#'re irrele##nt if #o# h##e the f##ts.</li>
    </ul>
  </li>

  <li>
    Match zowel colour als color
    <ul>
        <li>String: Zowel colour als color zijn correct Engels.</li>
        <li>Regular Expression: colou?r</li>
        <li>Resultaat: Zowel # als # zijn correct Engels.</li>
      </ul>
    </li>

    <li>
      Match enkel de getallen die een 1 als duizendtal hebben.
      <ul>
        <li>String: 1020 1050 9784 1560 0231 1546 8745</li>
        <li>Regular Expression: 1\d{3}</li>
        <li>Resultaat: # # 9784 # 0231 # 8745</li>
      </ul>
    </li>

    <li>
      Match alle data zodat er enkel een reeks "en" overblijft.
      <ul>
        <li>String: 24/07/1978 en 24-07-1978 en 24.07.1978</li>
        <li>Regular Expression: (\d{1,4}\S){3}</li>
        <li>Resultaat: # en # en #</li>
      </ul>

    </li>
  </ul>
</body>
</html>
