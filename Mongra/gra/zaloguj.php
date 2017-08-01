<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gra przeglądarkowa</title>
</head>
<body>
<?php 
    session_start();

    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header("Location: index.php");
        exit();
    }
    require_once "connect.php";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    $e="";
    if($polaczenie->connect_errno!=0)
    {
        $e="Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        $e= "It works!";
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
                header('Location: gra.php');
           }
           else
           {
            $_SESSION['blad']='<span style="color:red">Nieprawidłowy login lub hasło! </span>';
            header('Location: index.php');
           }
       }

        $polaczenie->close();
        }
?>

--------------------------------------
<?= $login ?>
</br>
<?= $haslo ?>
</br>
<?= $e ?>
</br>
</body>
</html>