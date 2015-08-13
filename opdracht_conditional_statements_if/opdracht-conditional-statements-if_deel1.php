<?php

	$getal = 3;
	
	if ( $getal == 1 ) 
	{
		$status = "maandag";
	}

	if ( $getal == 2 ) 
	{
		$status = "dinsdag";
	}

	if ( $getal == 3 ) 
	{
		$status = "woensdag";
	}

	if ( $getal == 4 ) 
	{
		$status = "donderdag";
	}

	if ( $getal == 5 ) 
	{
		$status = "vrijdag";
	}

	if ( $getal == 6 ) 
	{
		$status = "zaterdag";
	}

	if ( $getal == 7 ) 
	{
		$status = "zondag";
	}

	$kleineLetter = strtolower($status);
	
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht conditional statements</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body>


	
	
		

		<h1>opdracht_conditional_statements_deel1 </h1>

		<p>Het getal is <?php echo $getal ?>, het is vandaag <?php echo $kleineLetter ?></p>

	

</body>
</html>