<?php
$dlugosc=$argv[1];
function haslo($dlugosc)
{
    $czas=md5(time());
    $czas=substr($czas,0,$dlugosc);
    return($czas);
}
$haslo=haslo($dlugosc);
echo $haslo;
echo"\n";