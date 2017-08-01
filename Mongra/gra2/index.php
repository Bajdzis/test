<?php

/* ----- Zawarcie pliku z funkcjami ------ */
include_once 'connect.php';


$page = isset($_GET['page']) ? $_GET['page'] : 'index';

if($page === 'index'){

     show_login_form();
     include_once 'login_form.php';
     
}

if($page === 'logout'){

     logout();
    
}

if($page === 'login'){

     login($_POST['login'], $_POST['haslo']);
}


?>

