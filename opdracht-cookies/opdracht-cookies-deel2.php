<?php
	if(isset($_GET['logout'])){
		setcookie('authenticatedUserId', '', time() - 1000);
		header('location: opdracht-cookies-deel2.php');
	}
	$fileContent = file_get_contents('opdracht-cookies-deel2.txt');
	$userData = json_decode($fileContent, true);
	$statusMessage = false;
	$isAuthenticated = false;
	if(isset($_POST['submit'])){
		foreach($userData as $id => $user){
			if($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
				$cookieTime = (isset($_POST['keepLogged']) ? (time() + 30*24*60*60 ) : time() + 60*60);
				setcookie('authenticatedUserId', $id, $cookieTime);
				header('location: opdracht-cookies-deel2.php');
				break;
			}
		}
		$statusMessage = 'There was an error. Try again.';
	}
	if(isset($_COOKIE['authenticatedUserId'])){
		$userId = $_COOKIE['authenticatedUserId'];
		$statusMessage = 'Welcome '.$userData[$userId]['username'].'. You are logged in.';
		$isAuthenticated = true;
	}
?>
<!DOCTYPE html>
<html>
<head></head>
	<body>
		<h1>Inloggen</h1>
		<?php if ($statusMessage): ?>
			<?=	$statusMessage ?>
		<?php endif ?>

		<?php if ( !$isAuthenticated ): ?>
			<form action="opdracht-cookies-deel2.php" method="POST">
				<ul>
					<li>
						<label for="username">Username: </label>
						<input type="text" name="username" id="username" value="Lore">
					</li>
					<li>
						<label for="password">Password: </label>
						<input type="password" name="password" id="password" value="test123">
					</li>
					<li>
						<label for="keepLogged">keep me logged in: </label>
						<input type="checkbox" name="keepLogged" id="keepLogged">
					</li>
				</ul>
				<input type="submit" name="submit" value="login">
			</form>
		<?php else: ?>
			<a href="opdracht-cookies-deel2.php?logout=true">Uitloggen</a>
		<?php endif ?>
	</body>
</html>
