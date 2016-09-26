<?php

function fibonacci($i)
{
    return(($i < 2) ? 1 : fibonacci($i - 1) + fibonacci($i - 2));
}

$enter = readline('Entrez un nombre'.PHP_EOL);
echo fibonacci($enter);
?>