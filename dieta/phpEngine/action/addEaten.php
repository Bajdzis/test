<?php

$id = requireLogin();

requireGet('product_id');
requireGet('eaten');

$data = date("Y-M-D G:i:s");
$time = date("G:i:s");

$day_id = createCurrentDayIfNotExist();

print_r($day_id);
DB::query('INSERT INTO consumption VALUES(null,"'.$_GET['product_id'].'", "'.$id.'", "'.$day_id.'", "'.$_GET['eaten'].'", "'.$time.'")');
