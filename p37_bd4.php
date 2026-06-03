<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Dane województwa</h1>
<form action="" method="post">
    <p>Nazwa województwa: <input type="text" name="wojewodztwo"></p>
    <input type="submit" value="Dodaj województwo" name="zapisz">
</form>

<?php

if(isset($_POST["zapisz"]))
{
    $wojewodztwo = htmlspecialchars(trim($_POST["wojewodztwo"]));

    $server = "localhost";
    $user = "root";
    $pwd = "";
    $bd = "hurtownia";

    $conn = mysqli_connect($server, $user, $pwd, $bd);

    if($conn == false)
    {
        die("nie udało się połączyć z bazą, błąd: ".mysqli_connect_error());
    }

    echo "zostałeś połączony z bazą";

    $sql = "INSERT INTO wojewodztwa(NazwaWojewodztwa)
            VALUES('$wojewodztwo');";

    $ret = mysqli_query($conn, $sql);

    if($ret == true)
    {
        echo "<br>Dodano nowe województwo";
    }
    else
    {
        echo "<br>Błąd dodawania danych";
    }

    mysqli_close($conn);
}

?>

    
</body>
</html>