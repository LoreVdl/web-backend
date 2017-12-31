<?php
  session_start();

  $producten = array();

  if (isset($_GET['session']))
  {
    if ($_GET['session'] == 'destroy')
    {
      session_destroy();
      header('location: sessions-gevorderd.php');
    }
  }

  if (isset($_POST['add']))
  {
    $product = $_POST['add'];

    if (isset($_SESSION['producten'][$product]))
    {
      $_SESSION['producten'][$product] ++;
    }
    else
    {
      $_SESSION['producten'][$product] = 1;
    }
  }

  if (isset($_POST['delete']))
  {
    $product = $_POST['delete'];
    unset($_SESSION['producten'][$product]);
  }

  if (isset($_POST['substract']))
  {
    $product = $_POST['substract'];

    if ($_SESSION['producten'][$product] > 1)
    {
      $_SESSION['producten'][$product] --;
    }
    else
    {
      unset($_SESSION['producten'][$product]);
    }
  }

  if (isset( $_SESSION['producten'] ) )
	{
		$producten = $_SESSION['producten'];
	}
?>

<!doctype html>
<html>
  <head>
    <title>Winkelen</title>
  </head>

  <body>
    <h1>Winkelrek</h1>

    <form action = 'sessions-gevorderd.php' method = 'POST'>
      <ul>
        <li><button value = 'tros-bananen' name = 'add'>Tros bananen</button></li>
        <li><button value = 'appelsienen' name = 'add'>Appelsienen</button></li>
        <li><button value = 'kofie' name = 'add'>Kofie</button></li>
        <li><button value = 'melk' name = 'add'>Melk</button></li>
      </ul>
    </form>

    <form action = 'sessions-gevorderd.php' method = 'POST'>
      <?php foreach ($producten as $product => $aantal): ?>
        <li><button value = '<?= $product ?>' name = 'delete'>X</button><?= $product ?> <button value = '<?= $product ?>' name = 'substract'>-</button><?= ($aantal) ?><button value = '<?= $product ?>' name = 'add'>+</button></li>
      <?php endforeach ?>
  </form>

    <p><a href = 'sessions-gevorderd.php?session=destroy'>Winkelmandje leegmaken</a></p>
  </body>
</html>
