<?php
	session_start();
  function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$message	=	Message::getMessage();
	$email		=	'';
	$password	=	'';

	if ( isset( $_SESSION[ 'generate' ] ) )
	{
		$email		=	$_SESSION[ 'generate' ][ 'email' ];
		$password	=	$_SESSION[ 'generate' ][ 'password' ];
	}

	var_dump( $_SESSION );
?>

<!doctype>
<html>
  <head>
    <title>Registratie proces>
  </head>

  <body>
    <h1>Registreren</h1>

    <?php if ( $message ): ?>
			<div class="modal <?php echo $message['type'] ?>">
				<?php echo $message['text'] ?>
			</div>
		<?php endif ?>

    <form action="registrate-proces.php" method = "post">
      <ul>
        <li>
          <label for="email">e-mail</label>
          <input type="text" name = "email" id="email">
        </li>
        <li>
          <label for="password">paswoord</label>
          <input type="<?= ( $password != '' ) ? 'text' : 'password' ?>" name="password" id="password">
          <input type="submit" name="generatePassword" value="Genereer een paswoord">
      </li>
    </ul>
    <input type="submit" value="Registreer">
  </form>
  </body>
</html>
