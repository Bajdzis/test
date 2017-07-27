<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Tabela kolorów</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
echo "<table>";
$color=array('00','33','66','99','CC','FF');

    foreach ($color as $r)
    {
        foreach($color as $g)
        {
            echo"<tr>";
            foreach($color as $b)
            {
                echo "<td bgcolor=\"$r$g$b\">";
                echo "<p style='color: #C0C0C0;'>";
                echo "#".$r,$g,$b;
                echo "</p>";
                echo "</td>";
            }

            echo"</tr>";
        }


    }


echo "</table>";
?>

</body>
</html>