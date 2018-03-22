<?php

$id = requireLogin();


$result = DB::result("SELECT ID, day as name, caloriesToEat, haveWeight  FROM days WHERE user_id='".$id."'");


echo json_encode($result);