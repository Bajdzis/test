<?php

$id = requireLogin();
if(isset($_GET['day_id'])){
    $day_id = $_GET['day_id'];
}else{
    $day_id = createCurrentDayIfNotExist();
}


$result = DB::result("SELECT consumption.ID as eaten_id, consumption.product_id, consumption.weight, consumption.time, products.name, products.carbohydrates, products.protein, products.fat
FROM products, consumption WHERE consumption.user_id = '".$id."' and consumption.day_id = '".$day_id."' and consumption.product_id = products.ID");

echo json_encode($result);