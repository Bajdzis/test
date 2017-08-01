<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zaloguj</title>
</head>
<body>
    <?php global $out;
    
    include './user.php';
    include './login_form.php';
    print_r ($out); 

    ?>
   
</body>
</html>