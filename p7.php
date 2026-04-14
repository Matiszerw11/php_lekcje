<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
    Napisz skrypt w którym pobieramy od użytkownika 2 liczby całkowite, dodajemy je
    i wyświetlamy wynik
-->
<p>podaj 2 liczby</p>
<form action="p7.php" method="POST">
<input type="number" name="liczba1">
<input type="number" name="liczba2">

<button type="submit" name="dodaj">Dodaj</button>
<button type="submit" name="odejmij">Odejmij</button>
<button type="submit" name="pomnoz">Pomnóż</button>
<button type="submit" name="podziel">Podziel</button>
<button type="submit" name="poteguj">Potęguj</button>
<button type="submit" name="nwd">NWD</button>
</form>



<?php

if(isset($_POST["dodaj"]))
    {
        $l1 = $_POST["liczba1"];
        $l2 = $_POST["liczba2"];
        $wynik = $l1 + $l2;


        echo "wynik:  $wynik";
    }
    if(isset($_POST["odejmij"]))
    {
        $l1 = $_POST["liczba1"];
        $l2 = $_POST["liczba2"];
        $wynik = $l1 - $l2;


        echo "wynik:  $wynik";
    }
        if(isset($_POST["pomnoz"]))
    {
        $l1 = $_POST["liczba1"];
        $l2 = $_POST["liczba2"];
        $wynik = $l1 * $l2;


        echo "wynik:  $wynik";
    }
        if(isset($_POST["podziel"]))
    {
        $l1 = $_POST["liczba1"];
        $l2 = $_POST["liczba2"];
        $wynik = $l1 / $l2;


        echo "wynik:  $wynik";
    }
        if(isset($_POST["poteguj"]))
    {
        $l1 = $_POST["liczba1"];
        $l2 = $_POST["liczba2"];
        $wynik = pow($l1, $l2);


        echo "wynik:  $wynik";
    }
        if(isset($_POST["nwd"]))
    {
        $l1 = $_POST["liczba1"];
        $l2 = $_POST["liczba2"];
        
        function nwd($l1, $l2) 
        {
            while($l2 != 0)
            {
            $x = $l2;
            $l2 = $l1 % $l2;
            $l1 = $x;
            }
            return $l1;
        }

        $wynik = nwd($l1, $l2);

        echo "wynik:  $wynik";
    }


    

?>
    
</body>
</html>