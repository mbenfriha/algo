<?php

function fibonacci($nb)
{
	$nb1 = 0;
	$nb2 = 1;

	while($nb > 0) {
		$tmp = $nb1 + $nb2;
		$nb1 = $nb2;
		$nb2 = $tmp;
		$nb--;		  
	}
	return $nb2;
}

$enter = readline('Entrez un nombre'.PHP_EOL);
echo fibonacci($enter);

?>