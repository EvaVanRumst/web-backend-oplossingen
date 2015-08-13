<?php

			$lettertje = 'e';
			$cijfertje = 3;
			$langsteWoord = 'zandzeepsodemineralenwatersteenstralen';
			$vervang = str_replace( $lettertje, $cijfertje,$langsteWoord );
			
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

		<h1>opdracht string extra: deel 3</h1>

		
		<p>Vervang 'e': <?php echo $vervang ?></p>



	</section>

</body>
</html>