<?php
	$message = false;
	try {
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
		$query = "SELECT * FROM brouwers";
		$statement = $db->prepare($query);
		$statement->execute();
		$brouwersFieldName = array();

		if (isset($_POST['delete'])) {
			$deletequery = "DELETE FROM brouwers WHERE brouwernr = :brouwernr";
			$deleteStatement = $db->prepare($deletequery);
			$deleteStatement->bindValue(':brouwernr', $_POST['delete']);

			$isDeleted = $deleteStatement->execute();

			if ($isDeleted) {
				$message = 'De data werd goed verwijderd';
			}
			else {
				$message = 'De datarij kon niet verwijderd worden. Probeer opnieuw.';
			}
		}

		for ($fieldNumber = 0; $fieldNumber < $statement->columnCount(); $fieldNumber++) {
			$brouwersFieldName[] = $statement->getColumnMeta($fieldNumber)['name'];
		}

		$brouwers = array();

		while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$brouwers[] = $row;
		}
	}
	catch (PDOExcpetion $e) {
		$message = 'De connectie is niet gelukt. ' . $e->getMessage();
	}
?>

<!doctype html>
<html>
	<head>
		<title>Opdracht Crud insert</title>
	</head>

	<body>
		<?php if($message): ?>
			<p><?= $message ?></p>
		<?php endif ?>
		<form action = 'opdracht-crud-delete-deel1.php' method = 'POST'>
			<table>
				<thead>
					<tr>
						<th>#</th>
							<?php foreach($brouwersFieldName as $fieldName): ?>
								<th><?= $fieldName ?></th>
							<?php endforeach ?>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($brouwers as $key => $brouwer): ?>
						<tr>
							<td><?= ++$key ?> </td>
							<?php foreach($brouwer as $value): ?>
								<td><?= $value ?></td>
							<?php endforeach ?>

							<td><button type = 'submit' name = 'delete' value = '<?= $brouwer['brouwernr'] ?>'>Delete</button></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</form>
	</body>
</html>
