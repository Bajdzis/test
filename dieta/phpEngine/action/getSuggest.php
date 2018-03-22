<?php

$id = requireLogin();
requireGet('name');


if(strlen($_GET['name']) == 0){
    echo "[]";
    exit;
}

$result = DB::result("SELECT ID, name, carbohydrates, protein, fat
FROM products WHERE user_id = '".$id."' and name LIKE '%".$_GET['name']."%'");

$resultNotMy = DB::result("SELECT ID, name, carbohydrates, protein, fat
FROM products WHERE user_id <> '".$id."' and name LIKE '%".$_GET['name']."%'");

foreach ($resultNotMy as $key => $value) {
    $resultNotMy[$key]['ID'] = '-1';
    $result[] = $resultNotMy[$key];
}

echo json_encode($result);