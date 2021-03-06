<?php
  session_start();

  function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}
  
  if(!isset($_COOKIE['login']))
  {
    new Message('error', 'U moet eerst inloggen');
    header('location: login-form.php');
  }

  $cookie = explode(",", $_COOKIE['login']);

  $email = $cookie[0];
  $saltedEmail = $cookie[1];
  $db =	new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', '' );

  $queryUser = "SELECT * FROM users WHERE email = :email";

  $statementUser = $db->prepare($queryUser);
  $statementUser->bindValue(":email", $email);
  $statementUser->execute();

  $userArray = array();

  while($row = $statementUser->fetch(PDO::FETCH_ASSOC)) $userArray[] = $row;

  $salt = $userArray[0]['salt'];
  $newSaltedEmail = hash('sha512', $email . $salt);

  if($newSaltedEmail != $saltedEmail)
  {
    unset($_SESSION['login']);
    setcookie('login', '', time()-3600);
  }

  if ( User::validate( $connection ) )
	{
		$message	=	Message::getMessage();
	}
	else
	{
		User::logout();
		new Message('error', 'Er ging iets mis tijdens het inloggen, probeer opnieuw.');
		header( 'location: registratie-form.php' );
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../foundation.min.css">
    <title>Dashboard</title>
  </head>
  <body>
    <h1>Dashboard</h1>
      <p><?= $message ?></p>
      <button>
    <span>&times;</span>
  </button>
    </div>


  </body>
</html>
