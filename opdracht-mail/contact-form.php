<?php
	session_start();

	if (isset($_SESSION['fieldNames'])) {
		$email = $_SESSION['fieldNames']['emai'];
		$message = $_SESSION['fieldNames']['message'];
		$sendCopy = $_SESSION['fieldNames']['senCopy'];
	}
?>

<!doctype html>
<html>
	<head>
		<title>Opdracht Mail</title>
	</head>

	<body>
		<form action = 'contact.php' method = 'POST'>
			<ul>
				<li>
					<label for = 'email'>E-mailadres</label>
					<input type = 'text' name = 'email' id = 'email' value = "<?= (isset($email)) ? $email : '' ?>">
				</li>

				<li>
					<label for = 'message'>Boodschap</label>
					<textarea name = 'message' id = 'message' value = "<?= (isset($message)) ? $message : '' ?>"></textarea>
				</li>

				<li>
					<label for = 'sendCopy'>Stuur een kopie naar mezelf</label>
					<input type = 'checkbox' name = 'sendCopy' id = 'sendCopy' value = "<?= (isset($sendCopy)) ? $sendCopy : '' ?>">
				</li>
			</ul>

			<input type="submit" id="submit" name="submit">
		</form>
	</body>
</html>
