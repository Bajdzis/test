<?php

session_start();

/* ----- Profil gracza i jego zasoby ------ */
function show_profil_user(){
global $out;

    $out['id']=$_SESSION['id'];
    $out['user']=$_SESSION['user'];
    $out['drewno']=$_SESSION['drewno'];
    $out['kamien']=$_SESSION['kamien'];
    $out['zboze']=$_SESSION['zboze'];
    $out['email']=$_SESSION['email'];
    $out['dnipremium']=$_SESSION['dnipremium'];

$out['template']="user.php";


}

/* ----- Pokazanie formularza logowania ------ */
function show_login_form(){
    global $out;
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        show_profil_user();
   
    }else{
        $out['template']="login_form.php";
    }

}


/* ----- Połączenie z bazą danych w MySQL -------- */
function connect(){
    global $out;
    $host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="osadnicy";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    if($polaczenie->connect_errno!=0)
    {
    echo "Error: ".$polaczenie->connect_errno;
    }
    return  $polaczenie;

}



/* ------ Logowanie ------ */
function login($login, $haslo){
    global $out;
  

    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        $out['template']="login_form.php";
    }

    $polaczenie = connect();

       $sql= "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";
       if ($rezultat =@$polaczenie->query($sql))
       {
           $ilu_userow=$rezultat->num_rows;
           if($ilu_userow>0)
           {
               $_SESSION['zalogowany']=true;
                $wiersz=$rezultat->fetch_assoc();
                $_SESSION['id']=$wiersz['id'];
                $_SESSION['user']=$wiersz['user'];
                $_SESSION['drewno']=$wiersz['drewno'];
                $_SESSION['kamien']=$wiersz['kamien'];
                $_SESSION['zboze']=$wiersz['zboze'];
                $_SESSION['email']=$wiersz['email'];
                $_SESSION['dnipremium']=$wiersz['dnipremium'];

                $rezultat->free();
                 show_profil_user();
           }
           else
           {
            $out['blad']='Nieprawidłowy login lub hasło!';
            show_login_form();
           }
       }

        $polaczenie->close();
        

}

/* ------ Wyloguj ----- */
function logout(){
    global $out;
    $out['succecLogout'] = isset($_SESSION['id']);
    session_unset();
}


function image($name)
{
    return '<img src="templates/images/'.$name.'" alt="" class="icon">';
}