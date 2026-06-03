<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <p>Data 1: <input type="date" name="data1"></p>
    <p>Data 2: <input type="date" name="data2"></p>
    <input type="submit" name="oblicz" value="Oblicz dni">
</form>

<?php
if(isset($_POST["oblicz"]))
{
    $data1 = $_POST["data1"];
    $data2 = $_POST["data2"];


    list($y1, $m1, $d1) = explode("-", $data1);
    list($y2, $m2, $d2) = explode("-", $data2);

    $czas1 = mktime(0, 0, 0, $m1, $d1, $y1);
    $czas2 = mktime(0, 0, 0, $m2, $d2, $y2);


    $roznica = $czas2 - $czas1;


    $dni = $roznica / (60 * 60 * 24);

    echo "<br>Różnica dni: " . $dni;
}
?>

</body>
</html>