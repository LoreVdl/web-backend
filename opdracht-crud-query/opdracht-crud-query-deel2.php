<?php
	$message = '';
	try {
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
		$query = "SELECT brouwernr, brnaam FROM brouwers";
		$statement = $db->prepare($query);
		$statement->execute();
		$bieren = array();

		while($row = $statement->fetch()) {
			$bieren[] = $row;
		}
	}

	catch (PDOException $e) {
		$message = 'Er ging iets mis: ' . $e->getMessage();
	}

	if (isset($_GET['submit'])) {
		try {
			$biermerk = $_GET['biermerk'];
			$query = "SELECT naam FROM bieren WHERE brouwernr = :biermerk";
			$statement = $db->prepare($query);
			$statement->bindValue(':biermerk', $biermerk);
			$statement->execute();
			$bierenArray = array();

			while($row = $statement->fetch()) {
				$bierenArray = $row;
			}
		}

		catch (PDOException $e) {
			$message = 'Er ging iets mis met de tabel: ' . $e->getMessage();
		}
	}
?>

<!doctype html>
<html>
	<head>
		<title>Opdracht Crud query deel 1</title>
	</head>

	<body>
		<form action = 'opdracht-crud-query-deel2.php' method = 'GET'>
			<select name = 'biermerk'>
				<?php foreach($bieren as $row): ?>
					<option value = "<?php $row['brouwernr'] ?>"<?php if (isset($_GET['submit']) && $row['brouwernr'] == $_GET['biermerk']): ?> selected <?php endif ?>><?= $row['brnaam'] ?> </option>
				<?php endforeach ?>
			</select>
			<input type = 'submit' name = 'submit' value = 'Geef mij alle bieren van deze brouwerij'>
		</form>

		<?php if(isset($_GET['submit'])): ?>
      <table>
        <thead>
          <td>Aantal</td>
          <td>naam</td>
        </thead>
        <tbody>
          <?php $i = 1; foreach($bierenArray as $row): ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $row['naam'] ?></td>
            </tr>
          <?php $i++; endforeach; ?>
        </tbody>
        <tfoot>
          <td><?= count($bierenArray) ?></td>
          <td>total</td>
        </tfoot>
      </table>
    <?php endif; ?>
	</body>
</html>
