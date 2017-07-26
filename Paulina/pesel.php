<?php
$PESEL = $argv[1];
$waga = '1379137913';
for ($i = 0; $i <= 9; $i++) {
    $mnozenie = $PESEL[$i] * $waga[$i];
    //echo $mnozenie;
    $suma;
    $suma+= $mnozenie;
    //echo "\n";
}
//echo $suma."\n";
$zmienna = $suma % 10;
//echo $zmienna;

if (10 - $zmienna == $PESEL[10]) {
    echo "Pesel jest poprawny\n";
    if ($PESEL[9] % 2 == 0)
        echo "KOBIETA\n";
    else
        echo "MEZCZYZNA\n";

    echo "Data urodzenia to " . $PESEL[4], $PESEL[5] . "." . $PESEL[2], $PESEL[3] . ".19" . $PESEL[0], $PESEL[1];
} else
    echo "Pesel jest niepoprawny\n";