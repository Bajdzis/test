<?php
$klocki=$argv[1];
$suma=0;
if($klocki!=0) {

    for($i=1; $suma<=$klocki; $i++) {
        $suma += $i;
        if($suma>$klocki)
            break;
        //echo $suma."\n";
        $wynik=$i;
    }
    echo "Liczba kolumn to: ".$wynik."\n";
}
else
    echo "Liczba kolumn to: 0\n";
