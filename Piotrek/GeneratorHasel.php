<?php
$dlugosc = $argv[1];
$przedzial = range('A','z');
for($i = 0; $i < $dlugosc; $i++)
{
    echo $przedzial[array_rand($przedzial)];
}
echo "\n";