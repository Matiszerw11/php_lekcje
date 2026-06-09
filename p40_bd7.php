<?php

$server = "localhost";
$user = "root";
$pwd = "";
$bd = "hurtownia";

$conn = mysqli_connect($server, $user, $pwd, $bd);

if($conn == false)
{
    die("nie udało się połączyć z bazą, błąd: ".mysqli_connect_error());
}

$imie = "";
$nazwisko = "";
$wybraneId = "";


if(isset($_POST["pobierz"]))
{
    $wybraneId = $_POST["klient"];

    $sql = "SELECT Imie, Nazwisko FROM klienci WHERE IDklienta = $wybraneId";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result))
    {
        $imie = $row["Imie"];
        $nazwisko = $row["Nazwisko"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">

    <p>ID klienta:
        <select name="klient">
            <?php
            $sql2 = "SELECT IDklienta FROM klienci";
            $res = mysqli_query($conn, $sql2);

            while($row = mysqli_fetch_assoc($res))
            {
                $selected = ($wybraneId == $row["IDklienta"]) ? "selected" : "";
                echo "<option value='".$row["IDklienta"]."' $selected>".$row["IDklienta"]."</option>";
            }
            ?>
        </select>
    </p>
    <input type="submit" name="pobierz" value="Pobierz">
    <hr>
    <p>Imię:
        <input type="text" name="imie" value="<?php echo $imie; ?>">
    </p>
    <p>Nazwisko:
        <input type="text" name="nazwisko" value="<?php echo $nazwisko; ?>">
    </p>

</form>



<?php mysqli_close($conn); ?>

</body>
</html>