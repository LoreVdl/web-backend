<?php
  session_start();

  function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

  $registratieFormName = 'registratie-form.php';

  if (isset($_POST['generatePassword']))
  {
    $generatePassword = generatePassword(10);

    $_SESSION['generate']['email'] = $_POST['email'];

    $_SESSION['generate']['password'] = $generatePassword;

    header('location: ' . $registratieFormName);
  }

  elseif (isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['generate']['email'] = $email;
    $_SESSION['generate']['password'] = $password;

    $isEmail = filter_var($email, FILTER_VALIDATE_EMAI);

    if ( !$isEmail )
		{
			$emailError = new Message( "error", "Dit is geen geldig e-mailadres." );

			header('location: ' . $registrationFormName );
		}

    elseif ( $password == '' )
		{
			new Message( "error", "Dit is geen geldig paswoord. Vul een geldig paswoord in." );

			header('location: ' . $registrationFormName );
		}

		else
		{
			$connection	=	new PDO( 'mysql:host=localhost;dbname=opdracht-security-login', 'root', '' );

			$db = new Database( $connection );

			$userData	=	$db->query( 'SELECT *
										FROM users
										WHERE email = :email',
									array(':email' => $email ) );

			if ( isset( $userData['data'][ 0 ] ) )
			{
				$userExistsError = new Message( "error", "De gebruiker met het e-mailadres " . $email . "komt reeds voor in onze database." );

				header('location: ' . $registrationFormName );
			}

			else
			{
				$newUser	=	User::CreateNewUser( $connection, $email, $password );

				if ( $newUser )
				{
					$registrationSuccess = new Message("success", "Welkom, u bent vanaf nu geregistreerd in onze app.");
					header('location: phpoefening-029-a-dashboard.php');
          setcookie("login", $email . "," . hash('sha512', $email . $salt), time()+2592000);
          header('location: ' . $dashboard );
				}
			}
		}
  }

  function generatePassword($length, $numbers = FALSE, $letters = TRUE, $lettersUpper = FALSE, $specialChars = FALSE)
  {
    $randomPassword;
    $charachterCount = 0;

    $passwordCharacters = array();

    if ($numbers)
    {
      $passwordCharacters['numbers'] = array(0,1,2,3,4,5,6,7,8,9);
    }

    if ($letters)
    {
      $passwordCharacters['letters'] = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v', 'w', 'x', 'y', 'z');
    }

    if ($lettersUpper)
    {
      $passwordCharacters['lettersUpper'] = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    }

    if ($specialChars)
    {
      $passwordCharacters['specialChars'] = array('@', '&', '*', '$', '/', '-', '_', '+', '%', '#', '=');
    }

    while ($characterCount < $length)
    {
			foreach ($passwordCharacters as $value)
      {
				if ($characterCount < $length)
        {

					$randomCharacter = rand(0,(count($value)-1));

					$passwordDump .= $value[$randomCharacter];

					$characterCount++;
				}
			}
		}

    return $randomPassword;
  }
?>
