<?php

   // Eerste manier
	$dieren1 =  array('kat', 
                     'hond', 
                     'schaap', 
                     'slang');

   // Tweede manier
   $dieren[]   =  'kat';
   $dieren[]   =  'hond';
   $dieren[]   =  'schaap';
   $dieren[]   =  'slang';

   // Multidimensionale array

   $voertuigen =  array('landvoertuigen'  => array('jeep', 
                                                   'formule 1'),

                        'watervoertuig'   => array('hoovercraft', 
                                                   'waterfiets'),

                        'luchtvoertuig'   => array('Gulfstream G6'),
                        );

   $voertuigen['landvoertuigen'] = array('jeep', 'formule 1');
   $voertuigen['watervoertuig'] = array('hoovercraft','waterfiets');
   $voertuigen['luchtvoertuig'] = array('Gulfstream G6');

    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing arrays basis: deel1</title>
	</head>
	<body>

      <h1>Oplossing arrays basis: deel1</h1>

      <pre><?php var_dump ( $dieren1 )  ?></pre>
       <pre><?php var_dump ( $dieren )  ?></pre>
		<pre><?php var_dump ( $voertuigen )  ?></pre>
	</body>
</html>