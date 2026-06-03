<?php
include "funkcje.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="p19_funkcje3.php" method="POST">

    <p>Wpisz pierwszą liczbę:
        <input type="number" name="a"/>
    </p>

    <p>Wpisz drugą liczbę:
        <input type="number" name="b"/>
    </p>

    <input type="submit" value="Oblicz NWD" name="btNWD"/>

</form>

<?php

if(isset($_POST["btNWD"]))
{
    $a = intval($_POST["a"]);
    $b = intval($_POST["b"]);

    echo "NWD = " . Euklides($a, $b);
}

?>

</body>
</html>