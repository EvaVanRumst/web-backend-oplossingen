<?php
	$getal = 95;
	$antwoord = "";
	
	if ( $getal >= 80 && $getal < 90 ) 
	{
		$antwoord = "Dit getal ligt tussen 80 en 90";
	} 
	elseif  (  $getal < 10 ) 
	{
		$antwoord = "Dit getal ligt tussen 0 en 10";
	}
		elseif  ( $getal >= 10 && $getal < 20 ) 
	{
		$antwoord = "Dit getal ligt tussen 10 en 20";}

elseif  ( $getal >= 20 && $getal < 30 ) 
	{
		$antwoord = "Dit getal ligt tussen 20 en 30";}

elseif  ( $getal >= 30 && $getal < 40 ) 
	{
		$antwoord = "Dit getal ligt tussen 30 en 40";}

elseif  ( $getal >= 40 && $getal < 50 ) 
	{
		$antwoord = "Dit getal ligt tussen 40 en 50";}

elseif  ( $getal >= 50 && $getal < 60 ) 
	{
		$antwoord = "Dit getal ligt tussen 50 en 60";}

elseif  ( $getal >= 60 && $getal < 70 ) 
	{
		$antwoord = "Dit getal ligt tussen 60 en 70";}

elseif  ( $getal >= 90 && $getal < 100 ) 
	{
		$antwoord = "Dit getal ligt tussen 90 en 100";}




	else 
	{
		$antwoord = "Geen geldig getal";
	}

	$opl = strrev($antwoord)
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van conditional statements: if ... elseif ... else ...</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van conditional statements: if ... elseif ... else ...</h1>

		<p>Het opgegeven getal: <?php echo $getal ?></p>
		<p>- <?php echo $opl ?></p>

	</section>

</body>
</html>