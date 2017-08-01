<?php
/* ----- Pokazanie formularza logowania ------ */
function show_login_form(){

    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        show_profil_user();
        exit();
    }

}

/* ----- Profil gracza i jego zasoby ------ */
function show_profil_user(){
include_once 'user.php';


}

/* ----- Połączenie z bazą danych w MySQL -------- */
function connect(){

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

    session_start();

    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header("Location: index.php?page=login");
        exit();
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

                unset($_SESSION['blad']);
                $rezultat->free();
                 include_once 'user.php';
           }
           else
           {
            $_SESSION['blad']='<span style="color:red">Nieprawidłowy login lub hasło! </span>';
             include_once 'login_form.php';
           }
       }

        $polaczenie->close();
        

}

/* ------ Wyloguj ----- */
function logout(){
    session_start();
    session_unset();
    header("Location: index.php");

}


?>