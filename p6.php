<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liczby</title>
</head>
<body>

<p>Podaj zakres liczb<p>

<form action="p6.php" method="POST">
    <p>Od: <input type="number" name="poczatek"></p>
    <p>Do: <input type="number" name="koniec"></p>
    <input type="submit" name="wyslij" value="Pokaż">
</form>

<?php

if (isset($_POST["wyslij"]))
    {
    $od = $_POST["poczatek"];
    $do = $_POST["koniec"];

    for ($i = $od; $i <= $do; $i++) {
        echo $i .  " , ";
    }
}
?>

</body>
</html>