<?php

$id = requireLogin();

$result = DB::result("SELECT weight, calc FROM users WHERE ID = '".$id."'");

echo json_encode($result[0]);