<?php

$arg = $argv[1];

function choinka($rozmiar)
{
    for($i = 1; $i < $rozmiar; $i++)
    {
	for($j = 1; $j <= $rozmiar - $i; $j++)
	{
	    echo " ";
	}
	for($j = 1; $j <= 2*$i - 1; $j++)
	{
	    echo "*";
	}
	echo "\n";
    }
    do
    {
	for($j = 1; $j <= $rozmiar - 1; $j++)
	    echo " ";
    } while($i < 0);
    echo "*\n";
}

choinka($arg);

?>