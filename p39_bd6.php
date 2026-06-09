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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie roweru</title>
</head>
<body>

<form action="" method="post">
    <p>Nazwa roweru: <input type="text" name="nazwa"></p>

    <p>Kategoria:
        <select name="kategoria">
            <?php
            $sql2 = "SELECT IDkategorii, NazwaKategorii FROM kategorierowerow;";
            $kat = mysqli_query($conn, $sql2);
            while($row = mysqli_fetch_assoc($kat))
            {
                echo "<option value='".$row["IDkategorii"]."'>".$row["NazwaKategorii"]."</option>";
            }
            ?>
        </select>
    </p>

    <p>Producent:
        <select name="producent">
            <?php
            $sql3 = "SELECT IDproducenta, NazwaProducenta FROM producenci;";
            $prod = mysqli_query($conn, $sql3);
            while($row = mysqli_fetch_assoc($prod))
            {
                echo "<option value='".$row["IDproducenta"]."'>".$row["NazwaProducenta"]."</option>";
            }
            ?>
        </select>
    </p>

    <p>Cena jednostkowa: <input type="number" name="cena"></p>
    <p>Opis roweru: <input type="text" name="opis"></p>

    <input type="submit" value="zapisz" name="zapisz">
</form>

<?php

if(isset($_POST["zapisz"]))
{
    $nazwa = htmlspecialchars(trim($_POST["nazwa"]));

    $idkat = $_POST["kategoria"];
    $idprod = $_POST["producent"];
    $cena = htmlspecialchars(trim($_POST["cena"]));
    $opis = htmlspecialchars(trim($_POST["opis"]));

    $sql1 = "INSERT INTO rowery (NazwaRoweru, IDkategorii, IDproducenta, CenaJednostkowa, OpisRoweru) VALUES ('$nazwa', $idkat, $idprod, $cena, '$opis')";

    $ret = mysqli_query($conn, $sql1);

    if($ret == true)
        echo "<br>Rekord został dodany";
}

mysqli_close($conn);
?>

</body>
</html>

