<?php

function fibonacci($nb)
{
        for($nb1 = 0, $nb2 = 1; $nb > 0; $nb--) {
                     $tmp = $nb1 + $nb2;
                     $nb1 = $nb2;
                     $nb2 = $tmp;
        }

        return $nb2;
}

$enter = readline('Entrez un nombre'.PHP_EOL);
echo fibonacci($enter);

?>