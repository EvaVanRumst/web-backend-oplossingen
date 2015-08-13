<?php

	$dierenNum = array('koe','paard','hond','wolf','slang','muis','rat','konijn','vogel','mug');

	$dierenNum [] = 'koe';
	$dierenNum [] = 'paard';
	$dierenNum [] = 'hond';
	$dierenNum [] = 'wolf';
	$dierenNum [] = 'slang';
	$dierenNum [] = 'muis';
	$dierenNum [] = 'rat';
	$dierenNum [] = 'konijn';
	$dierenNum [] = 'vogel';
	$dierenNum [] = 'mug';

	$voertuigen = array('landvoertuigen' =>	array('auto', 'fiets'),
						'watervoertuigen' => array('zeilboot'),
						'luchtvoertuigen' => array('jet', 'turbo'));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van multidimensional arrays</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van arrays</h1>

		<pre><?php var_dump( $voertuigen) ?></pre>

	</section>

</body>
</html>