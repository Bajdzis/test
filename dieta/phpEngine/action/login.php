<?php

requireGet('mail');
requireGet('password');

//$_SESSION['login'] = 

$result = DB::result('SELECT ID FROM users WHERE mail="'.$_GET['mail'].'" and password="'.md5($_GET['password']).'"');

if( count($result) == 0 ){
    echo "zły login lub hasło";
    exit;
}

echo "zalogowano";

$_SESSION['ID'] = $result[0]['ID'];

//print_r($result);
