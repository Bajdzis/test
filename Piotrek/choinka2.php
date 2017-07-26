<?php

$arg = $argv[1];

function choinka($rozmiar)
{
    for ($i = 1; $i < $rozmiar; $i++) {
        $ilosc = $rozmiar - $i;
        echo str_repeat(" ", $ilosc);
        echo str_repeat("*", $i*2 - 1);
        echo "\n";
    }
    $pieniek = $i-1;
        echo str_repeat(" ", $pieniek);
    echo "*\n";

}

choinka($arg);

?>