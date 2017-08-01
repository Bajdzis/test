<!--- Profil użytkownika i jego zasoby -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twoje konto</title>
</head>
<body>
    <h2> Witaj <?=$_SESSION['user']?>! </h2>
    <a href="index.php?page=logout">[Wyloguj się]</a>

    <p><b>Drewno:</b> <?= $_SESSION['drewno'] ?>
    <b>| Kamień:</b> <?= $_SESSION['kamien'] ?>
    <b>| Zboże:</b> <?= $_SESSION['zboze'] ?> </p>
    <p><b>Email:</b> <?= $_SESSION['email'] ?> </p>
    <p><b>Dni premium:</b> <?= $_SESSION['dnipremium'] ?> </p>

</body>
</html>