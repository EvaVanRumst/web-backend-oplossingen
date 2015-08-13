<?php

	$naam = 'Van Rumst';
	$voornaam = 'Eva';
	$naamZonderSpaties = str_replace(' ','',$volledigeNaam);

	$volledigeNaam = $naam . " " .$voornaam;
	$volledigeLen = strlen( $volledigenaam );



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Opdracht concatenatie</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body>
	
	<section>

		<h1>Opdrachtconcatenatie</h1>

		<p><?php echo $volledigeNaam ?></p>
		
		
		<p>Aantal karakters: <?= $volledigeLen ?></p>
		
	</section>

</body>
</html>