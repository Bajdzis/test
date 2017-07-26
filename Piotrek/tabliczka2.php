<?php

$pion = $argv[1];
$poziom = $argv[2];

function tabliczka($pion, $poziom)
{
    $max = $pion*$poziom;
    $maxlength = strlen($max) +1;
    for($i = 1; $i <= $pion; $i++)
    {
        for($j = 1; $j <= $poziom; $j++)
        {
            $liczba = $i * $j;
            echo vsprintf("%{$maxlength}s", $liczba);
        }
        echo "\n";
    }
}

tabliczka($pion, $poziom);
?>