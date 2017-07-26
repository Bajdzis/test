<?php
$zdanie=$argv[1];
$ciag=str_replace(" ","",$zdanie);
$ciag=strtolower($ciag);

$odwrocony=strrev($ciag);

if($ciag===$odwrocony)
    echo"Ciag jest palindromem";
else
    echo "ciag nie jest palindromem";
