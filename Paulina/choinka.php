<?php
$liczba_wierszy=7;

for($i=1; $i<=$liczba_wierszy; $i++)
{
    for ($a=1; $a<=$liczba_wierszy-$i; $a++)
        echo " ";
    for ($j=1; $j<=2*$i-1; $j++) echo('*');
        echo "\n";
}

for ($a=1; $a<=(($liczba_wierszy*2)-1)/2; $a++)
    echo " ";

echo "*\n";
?>
