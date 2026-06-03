<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="p24_funkcje7.php" method="POST">
    <p>Wpisz pierwszy tekst: 
        <input type="text" name="tekst1"/>
    </p>

    <p>Wpisz drugi tekst: 
        <input type="text" name="tekst2"/>
    </p>

    <input type="submit" value="Sprawdź" name="btanagram"/>
</form>

<?php
include "funkcje.php";

if(isset($_POST["btanagram"]))
{
    $tekst1 = $_POST["tekst1"];
    $tekst2 = $_POST["tekst2"];

    $fczyAnagram = czyAnagram($tekst1, $tekst2);

    if($fczyAnagram == true)
    {
        echo "to są anagramy";
    }
    else
    {
        echo "to nie są anagramy";
    }
}
?>
    
</body>
</html>