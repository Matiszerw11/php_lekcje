<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    <p>podaj a: </p><input type="text" name="a">
    <p>podaj b: </p><input type="text" name="b">
    <p>podaj c: </p><input type="text" name="c">

    <input type="submit" value="Oblicz" name="Oblicz">
</form>

<?php

function Pierwiastki($a, $b, $c, &$x1, &$x2)
{
    $delta = $b * $b - 4 * $a * $c;

    echo "<br>Delta: $delta <br>";

    if ($delta > 0)
    {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);

        return 2;
    }
    else if ($delta == 0)
    {
        $x1 = -$b / (2 * $a);
        $x2 = $x1;

        return 1;
    }
    else
    {
        return 0;
    }
}

if(isset($_POST["Oblicz"]))
{
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $x1 = 0;
    $x2 = 0;

    $ile = Pierwiastki($a, $b, $c, $x1, $x2);

    echo "<br>Liczba pierwiastków: $ile <br>";

    if ($ile == 2)
    {
        echo "x1 = $x1 <br>";
        echo "x2 = $x2 <br>";
    }
    elseif ($ile == 1)
    {
        echo "x = $x1 <br>";
    }
    else
    {
        echo "Brak pierwiastków";
    }
}

?>

</body>
</html>