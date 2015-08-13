<?php

	

	$telMun = array_reverse( $getallen);
	$product = array_product($telNum);
	
	$lengte = count($telNum);

	$getallen = array( 1, 2, 3, 4, 5);
	$container = array();

	for($getalKey = 0; $getalKey < count($getallen); ++$getalKey)/*$getalKey = i!!!!*/
	{

		$getal = $getallen[ $getalKey ];
		if ($getal % 2 === 1)
		{
			/*echo '<p>Getal'. $getal. 'is oneven</p>';*/
			$container[] = $getal;

		}
	}


	
	


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

		<p><?php var_dump ($product) ?></pre>
		<h2>Oneven getallen</h2>
		<?php foreach... zie verder!!




		?>

	</section>

</body>
</html>