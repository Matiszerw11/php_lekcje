<?php

function CzyPierwsza($a)
{
    if($a < 2)
    {
        return false;
    }

    for($i = 2; $i < $a; $i++)
    {
        if($a % $i == 0)
        {
            return false;
        }
    }

    return true;
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="p17_funkcje1.php" method="POST">
    <p>Wpisz liczbę: 
        <input type="number" name="x"/>
    </p>

    <input type="submit" value="CzyPierwsza" name="btPierwsza"/>
</form>

<?php

if(isset($_POST["btPierwsza"]))
{
    $x = intval($_POST["x"]);

    if(CzyPierwsza($x) == true)
    {
        echo "To jest liczba pierwsza";
    }
    else
    {
        echo "To NIE jest liczba pierwsza";
    }
}

?>

</body>
</html>