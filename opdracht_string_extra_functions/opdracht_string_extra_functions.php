<?php

	$fruit = 'kokosnoot';
	$karakter = strlen ( $fruit );
	$letter = 'o';
	$positie = strpos ( $fruit, $letter);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Opdracht extra functions</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body>
	
	<section>

		<h1>opdracht string extra: deel 1</h1>

		<p>Aantal letters in kokosnoot:<?php echo $karakter ?></p>
		
		
		<p>Positie van de eerste o:<?php echo $positie ?></p>

			
	</section>

</body>
</html>