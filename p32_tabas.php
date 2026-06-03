<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$miesiace = array(
    "January" => "Styczeń",
    "February" => "Luty",
    "March" => "Marzec",
    "April" => "Kwiecień",
    "May" => "Maj",
    "June" => "Czerwiec",
    "July" => "Lipiec",
    "August" => "Sierpień",
    "September" => "Wrzesień",
    "October" => "Październik",
    "November" => "Listopad",
    "December" => "Grudzień"
);

$dni = array(
    "Monday" => "Poniedziałek",
    "Tuesday" => "Wtorek",
    "Wednesday" => "Środa",
    "Thursday" => "Czwartek",
    "Friday" => "Piątek",
    "Saturday" => "Sobota",
    "Sunday" => "Niedziela"
);


$day = date("l"); 
$month = date("F");
$dayNum = date("j");
$year = date("Y");
$time = date("H:i");


$dzien = $dni[$day];
$miesiac = $miesiace[$month];


echo "<p>Dzisiaj jest:</p>";
echo "$dzien $dayNum $miesiac $year <br>";
echo "Godzina: $time";

?>

</body>
</html>