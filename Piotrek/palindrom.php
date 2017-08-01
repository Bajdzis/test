<?php

$count = count($argv) - 1;

$word = implode(" ",$argv);
$word = str_replace("palindrom.php","",$word);
$word = strtolower(str_replace(" ", "", $word));

$reverse = strrev($word);

if($word == $reverse) echo "Wyraz/Zdanie jest palindromem\n";
else echo "Wyraz/Zdanie nie jest palindromem\n";



