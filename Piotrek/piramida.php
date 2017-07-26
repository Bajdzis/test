<?php
$klocki = $argv[1];
$zuzyte = 0;
$rzedy = 0;

for($i = 1; $i <= $klocki; $i++)
{
    $zuzyte += $i;
    if($zuzyte <= $klocki)
        $rzedy++;
}

echo $rzedy."\n";
?>