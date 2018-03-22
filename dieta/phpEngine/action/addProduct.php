<?php

$id = requireLogin();

requireGet('name');
requireGet('weight');
//requireGet('unit');
requireGet('fat');
requireGet('protein');
requireGet('carbohydrates');


/*
DB save only in 100 gram
*/

$fat = ( 100 / $_GET['weight'] ) * $_GET['fat'];
$protein = ( 100 / $_GET['weight'] ) * $_GET['protein'];
$carbohydrates = ( 100 / $_GET['weight'] ) * $_GET['carbohydrates'];

DB::query('INSERT INTO products VALUES(null, "'.$id.'","'.$carbohydrates.'","'.$protein.'","'.$fat.'", "'.$_GET['name'].'")');

echo DB::last();
