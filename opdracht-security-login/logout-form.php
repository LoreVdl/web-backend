<?php
	session_start();

  function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$logout	=	User::logout();

  unset($_SESSION['login']);
  setcookie('login', '', time()-3600);

	if ( $logout )
	{
		$logoutMessage	=	new Message('success', 'Tot de volgende keer!');
		header( 'location: login-form.php' );
	}

?>
