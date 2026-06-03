<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="p23_funkcje6.php" method="POST">
    <p>Wpisz tekst do sprawdzenia: 
        <input type="text" name="tekst"/>
    </p>

    <input type="submit" value="Sprawdź" name="btczypalindrom"/>
</form>


<?php
include "funkcje.php";

if(isset($_POST["btczypalindrom"]))
{

$tekst = $_POST["tekst"];

$fczyPalindrom = czyPalindrom($tekst);

if($fczyPalindrom == true)
    {
        echo "to jest palindrom";
    }
    else
        {
            echo "to nie jest palindrom";
        }
}

?>
</body>
</html>