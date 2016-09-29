`<?php

function coin($coins)
{
	$sumCoins = array_sum($coins);

	if($sumCoins % 2 == 0)
		$midCoins = $sumCoins/2;
	else
		$midCoins = ($sumCoins-1)/2;

	$m = array(array());
	for ($i=0;$i < count($coins); $i++)
	{
		for($j=0;$j<$midCoins;$j++)
		{
			$m[$i][$j] = 'faux';
		}
	}
	$m[0][0] = "vrai";


		for($j=1;$j<$midCoins;$j++)
		{
			if($coins[0] == $j)
				$m[0][$j] = 'vrai';
			else
				$m[0][$j] = 'faux';
		}

		for($i=1;$i<count($coins);$i++) 
		{
			for($j=0;$j<$midCoins;$j++)
			{
				if($m[$i-1][$j] == 'vrai')
					$m[$i][$j] = 'vrai';
				if($coins[$i] <= $j && $m[$i-1][$j-$coins[$i] == 'vrai'])
					 $m[$i][$j] = 'vrai';
			}
		}

	print_r($m);
}

coin([5, 9, 3, 8, 2, 5]);

?>