<?php

	var_dump( $_GET );

	$artikels =	array(
					array(	'title'	=> 'Titel artikel 1',
							'text' 	=> 'Tekst van artikel 1',
							'tags' 	=> 'Tags artikel 1',
					),
					array(	'title'	=> 'Titel artikel 2',
							'text' 	=> 'Tekst van artikel 2',
							'tags' 	=> 'Tags artikel 2',
					),
					array(	'title'	=> 'Titel artikel 3',
							'text' 	=> 'Tekst van artikel 3',
							'tags' 	=> 'Tags artikel 3',
					)
				);

	if ( isset( $_GET[ 'artikel' ] ) )
	{
		$artikel	=	$artikels[ $_GET[ 'artikel' ] ];
	}

	include 'header-partial.html';
	if ( !isset( $_GET[ 'artikel' ] ) )
	{
		include 'body-partial.html';
	}

	include 'footer-partial.html';

?>
