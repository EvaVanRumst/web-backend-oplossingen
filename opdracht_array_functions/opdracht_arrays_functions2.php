<?php

$dieren = array('koe', 'paard', 'slak', 'muis', 'spin');
$zoogdieren = array('walvis', 'hond', 'kat');
$aantalDieren = count($dieren);
$teZoekenDier = 'koe';

$gevonden = in_array( $teZoekenDier, $dieren);
$alphaDieren = sort($dieren);
$dierenLijst = array_merge($dieren, $zoogdieren);



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
		<ul>
         <?php foreach ($dieren as $key => $value): ?>
            <li>[<?= $key ?>]: <?= $value ?></li>
         <?php endforeach ?>
      </ul>
      	<pre><?php var_dump( $dierenLijst) ?></pre>
		
		

	</section>

</body>
</html>