<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

echo "zostałeś połączony z bazą";

echo "</table>";

echo "<br><br>";


$sql = "SELECT NazwaProducenta, COUNT(*) AS IloscRowerow FROM rowery INNER JOIN producenci ON producenci.IDproducenta = rowery.IDproducenta GROUP BY NazwaProducenta ORDER BY IloscRowerow DESC;";

$ret = mysqli_query($conn, $sql);
$ile = mysqli_num_rows($ret);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Nazwa producenta</th>";
echo "<th>Ilość rowerów</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($ret))
{
    echo "<tr>";
    echo "<td>".$row["NazwaProducenta"]."</td>";
    echo "<td>".$row["IloscRowerow"]."</td>";
    echo "</tr>";
}

echo "</table>";






echo "</table>";

echo "<br><br>";


$sql2 = "SELECT NazwaKategorii, COUNT(*) AS IloscRowerow FROM rowery INNER JOIN kategorierowerow ON kategorierowerow.IDkategorii = rowery.IDkategorii GROUP BY NazwaKategorii ORDER BY IloscRowerow DESC;";

$ret2 = mysqli_query($conn, $sql2);
$ile2 = mysqli_num_rows($ret2);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Nazwa kategorii</th>";
echo "<th>Ilość rowerów</th>";
echo "</tr>";

while($row2 = mysqli_fetch_assoc($ret2))
{
    echo "<tr>";
    echo "<td>".$row2["NazwaKategorii"]."</td>";
    echo "<td>".$row2["IloscRowerow"]."</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);

?>

</body>
</html>