<?php
	$message = '';
	try {
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
		$query = "SELECT * FROM bieren INNER JOIN brouwers ON bieren.brouwernr = brouwers.brouwernr WHERE bieren.naam LIKE 'du%' AND brouwers.brnaam LIKE '%a%'";
		$statement = $db->prepare($query);
		$statement->execute();
		$bieren = array();

		while ($row = $statement->fetch()) {
			$bieren[] = $row;
		}

	}
	catch (PDOExcpetion $e) {
		$message	=	'De connectie is niet gelukt. ' . $e->getMessage();;
	}
?>

<!doctype html>
<html>
	<head>
		<title>Opdracht Crud query deel 1</title>
	</head>

	<body>
		<table>
      <thead>
        <td>#</td>
        <td>biernr (PK)</td>
        <td>naam</td>
        <td>brouwernr</td>
        <td>soortnr</td>
        <td>alcohol</td>
        <td>brnaam</td>
        <td>adres</td>
        <td>postcode</td>
        <td>gemeente</td>
        <td>omzet</td>
      </thead>
      <?php $i = 1;foreach($bieren as $row): ?>
        <tbody>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row['biernr'] ?></td>
            <td><?= $row['naam'] ?></td>
            <td><?= $row['brouwernr'] ?></td>
            <td><?= $row['soortnr'] ?></td>
            <td><?= $row['alcohol'] ?></td>
            <td><?= $row['brnaam'] ?></td>
            <td><?= $row['adres'] ?></td>
            <td><?= $row['postcode'] ?></td>
            <td><?= $row['gemeente'] ?></td>
            <td><?= $row['omzet'] ?></td>
          </tr>
        </tbody>
      <?php $i++;endforeach; ?>
    </table>
	</body>
</html>
