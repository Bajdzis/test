<?php

ini_set('session.gc_maxlifetime', 21600 * 2);//12 godzin
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);

session_start();

if( count($_GET) == 0 ){
    header('Content-Type: text/html; charset=utf-8');
    include './view/index.html';
    exit;
}

include 'phpEngine/db.php';
include 'phpEngine/help.php';

if ( file_exists('phpEngine/action/'.$_GET['action'].'.php' )){
    include 'phpEngine/action/'.$_GET['action'].'.php';
}else{
    echo 'Nie znam akcji : '.$_GET['action'];
}

//print_r($_GET);

?>