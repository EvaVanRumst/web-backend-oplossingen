<?php

$dieren = array('koe', 'paard', 'slak', 'muis', 'spin');
$aantalDieren = count($dieren);
$teZoekenDier = 'koe';

$gevonden = in_array( $teZoekenDier, $dieren);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van multidimensional arrays2</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van arrays 2 </h1>

		<pre><?php echo ( $aantalDieren) ?></pre>
		<pre><?php echo ( $teZoekenDier) ?></pre>
		

	</section>

</body>
</html>