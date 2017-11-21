<?php
	if(isset($_GET['logout'])){
		setcookie('authenticated', '', time() -1000);
		header('location: opdracht-cookies.php');
	}
	$fileContent = file_get_contents('opdracht-cookies.txt');
	$userData = explode(',', $fileContent);
	$statusMessage = false;
	$isAuthenticated = false;
	if(!isset($_COOKIE['authenticated'])){
		if(isset($_POST['submit'])){
			if($_POST['useranme'] == $userData[0] && $_POST['password'] == $userData[1]){
				setcookie('authenticated', true, time() + 3600);
				header('location: opdracht-cookies.1.php');
			} else {
				$statusMessage = 'There was an error. Try again.';
			}
		}
	} else {
		$statusMessage = 'You are logged in.';
		$isAuthenticated = true;
	}
?>
<!DOCTYPE html>
<html>
<head></head>
	<body>
		<h1>Inloggen</h1>
		<?php if ($message): ?>
			<?=	$message ?>
		<?php endif ?>
		<?php if ( !$isAuthenticated ): ?>
			<form action="opdracht-cookies.php" method="POST">
				<ul>
					<li>
						<label for="username">Username: </label>
						<input type="text" name="username" id="username" value="lennert">
					</li>
					<li>
						<label for="password">Password: </label>
						<input type="password" name="password" id="password" value="myPass">
					</li>
				</ul>
				<input type="submit" name="submit" value="login">
			</form>
		<?php else: ?>
			<a href="opdracht-cookies.php?logout=true">Uitloggen</a>
		<?php endif ?>



	</body>
</html>
