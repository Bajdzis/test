<?php
/*
usuwa wpis o zjedzeniu produktu oraz produkt jeśli było to jego jedyne wystąpienie
*/
$id = requireLogin();
requireGet('id');


$result = DB::result('SELECT product_id FROM consumption WHERE ID = "'.$_GET['id'].'"');


$product_id = $result[0]["product_id"];

echo $product_id;
DB::query('DELETE FROM consumption WHERE ID = "'.$_GET['id'].'"');


$result = DB::result('SELECT count(1) as count FROM consumption WHERE product_id = "'.$product_id.'"');

echo "::".$result[0]['count'];
if($result[0]['count'] == "0"){
    
    DB::query('DELETE FROM products WHERE ID = "'.$product_id.'"');
}

