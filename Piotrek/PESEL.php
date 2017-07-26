<?php

$pesel = $argv[1];

    $sum = 0;
    $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1);

    foreach (str_split($pesel) as $position => $digit) {
        $sum += $digit * $weights[$position];
    }

    $isCorrect = substr($sum % 10, -1, 1) == 0;

if(strlen($pesel) != 11 && $isCorrect == false)
    echo "Pesel nieprawidłowy\n";
else echo "Pesel prawidłowy\n";

$split = str_split($pesel,2);
if($split[1] >= 81 && $split[1] <= 92)
    $split[0] += 1800;
elseif($split[1] >= 1 && $split[1] <= 12)
    $split[0] += 1900;
elseif($split[1] >= 21 && $split[1] <= 32)
    $split[0] += 2000;

if($split[1] >= 81 && $split[1] <= 92)
    $split[1] -= 80;
elseif($split[1] >= 21 && $split[1] <= 32)
    $split[1] -= 20;

echo "Data urodzenia: ".$split[0]."-".$split[1]."-".$split[2]."\n";

$split2 = str_split($split[4], 1);
$sex = $split2[1];

if($sex % 2 == 0)
    echo "Płeć: Kobieta\n";
else echo "Płeć: Mężczyzna\n";

