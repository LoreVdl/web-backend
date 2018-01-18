<?php
	$message = false;
	if (isset($_POST['submit'])) {
		try {
			$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
			$query = "INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet) VALUES(:brnaam, :adres, :postcode, :gemeente, :omzet)";
			$statement = $db->prepare($query);

			$statement -> bindValue(':brnaam', $_POST['brnaam']);
			$statement -> bindValue(':adres', $_POST['adres']);
			$statement -> bindValue(':postcode', $_POST['postcode']);
			$statement -> bindValue(':gemeente', $_POST['gemeente']);
			$statement -> bindValue(':omzet', $_POST['omzet']);

			$isAdded = $statement->execute();

			if ($isAdded) {
				$id = $db->lastInsertId();
				$message = 'Brouwerij succesvol toegevoegd. Het unieke nummer van de brouwerij is ' . $id;
			}
			else {
				$message = 'Er ging iets mis bij het toevoegen. Probeer opnieuw.';
			}

		}

		catch (PDOException $e) {
			$message = 'De connectie is niet gelukt ' . $e->getMessage();
		}
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
		<form action = 'opdracht-crud-insert.php' method = 'POST'>
			<ul>
				<li>
					<label for = 'brnaam'>Brouwernaam</label>
					<input type = 'text' name = 'brnaam' id = 'brnaam'>
				</li>

				<li>
					<label for = 'adres'>Adres</label>
					<input type = 'text' name = 'adres' id = 'adres'>
				</li>

				<li>
					<label for = 'postcode'>Postcode</label>
					<input type = 'text' name = 'postcode' id = 'postcode'>
				</li>

				<li>
					<label for = 'gemeente'>Gemeente</label>
					<input type = 'text' name = 'gemeente' id = 'gemeente'>
				</li>

				<li>
					<label for = 'omzet'>Omzet</label>
					<input type = 'text' name = 'omzet' id = 'omzet'>
				</li>
			</ul>

			<input type = 'submit' name = 'submit' value = 'Voeg toe'>
		</form>
	</body>
</html>
