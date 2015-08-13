<?php

	$fruit = 'ananas';
	$letter = 'a';
	$positie = strrpos ( $fruit, $letter);
	$hoofdletter = strtoupper($fruit)
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

		<h1>opdracht string extra: deel 2</h1>

		
		<p>Positie van de laatste a: <?php echo $positie ?></p>
		<p>In hoofdletter:<?php echo $hoofdletter?></p>


	</section>

</body>
</html>