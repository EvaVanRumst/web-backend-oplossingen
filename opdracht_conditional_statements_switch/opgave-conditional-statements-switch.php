<?php
	
	$getal = 2;

	switch ($getal)
			{
				case 1:
				$antwoord = "maandag";
				break;

				case 2:
				$antwoord = "dinsdag";
				break;

				case 3:
				$antwoord = "woensdag";
				break;

				case 4:
				$antwoord = "donderdag";
				break;

				case 4:
				$antwoord = "vrijdag";
				break;

				case 5:
				$antwoord = "zaterdag";
				break;

		case 6:
		$antwoord = "zondag";
		break;

		default:
		$antwoord = "Deze dag bestaat niet";
		

	}

	$replie = strtolower($antwoord);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van conditional statements: switch</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van conditional statements: switch</h1>

		<p>Getal op het menu: <?php echo $getal ?></p>
		<p>- <?php echo $replie ?></p>
		
	</section>
	
</body>
</html>