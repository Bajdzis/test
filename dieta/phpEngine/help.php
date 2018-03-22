<?php
function requireGet($index){
    if(isset($_GET[$index])){

    }else{
        echo 'Pole '.$index.' jest wymagane';
        exit;
    }
}

function requireLogin(){
    if(isset($_SESSION['ID'])){
        return $_SESSION['ID'];
    }else{
        echo 'Akcja nie dostępna musisz się zalogować';
        exit;
    }
}

function createCurrentDayIfNotExist(){
    $day = date("Y-m-d");
    $user_id = requireLogin();
    $result = DB::result("SELECT ID FROM days WHERE user_id='".$user_id."' and day='".$day."' limit 1");
    $resultAccount = DB::result("SELECT weight, calc FROM users WHERE ID='".$user_id."' limit 1");
    if(count($result) > 0){
        return $result[0]["ID"];
    }
    DB::query("INSERT INTO days VALUES(null, '".$user_id."', '".$day."', '".$resultAccount[0]['calc']."', '".$resultAccount[0]['weight']."')");
    return DB::last();
}