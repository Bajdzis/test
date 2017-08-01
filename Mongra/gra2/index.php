<?php

$out = [];
/* ----- Zawarcie pliku z funkcjami ------ */
include_once 'connect.php';


$out['listUser'] = [
    [
        'name' => 'nick1',
        'drewno' => 3420
    ],
    [
        'name' =>'nick2',
        'drewno' =>432
    ],
    [
        'name' =>'SuperNick',
        'drewno' =>543
    ],
    [
        'name' =>'bnjadshfkasd',
        'drewno' =>210
    ],
    [
        'name' =>'hfdhfdfdhfg',
        'drewno' =>324
    ]
];


$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$out['page'] = $page;


if($page === 'index'){

     show_login_form();
     $out['template']="login_form.php";
}

if($page === 'logout'){

     logout();
    
}

if($page === 'login'){

     login($_POST['login'], $_POST['haslo']);
}
include "/templates/index.php";

?>

