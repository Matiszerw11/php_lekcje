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

            $sql1 = "SELECT ImieKlienta, NazwiskoKlienta, MiastoKlienta from klienci;";
            $ret = mysqli_query($conn, $sql1);
            $ile = mysqli_num_rows($ret);
          


echo "<table border='1'>";
echo "<tr>";
echo "<th>Imię</th>";
echo "<th>Nazwisko</th>";
echo "<th>Miasto</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($ret))
{
    echo "<tr>";
    echo "<td>".$row["ImieKlienta"]."</td>";
    echo "<td>".$row["NazwiskoKlienta"]."</td>";
    echo "<td>".$row["MiastoKlienta"]."</td>";
    echo "</tr>";
}

echo "</table>";



    $sql2 = "SELECT NazwaRoweru, OpisRoweru, CenaJednostkowa, NazwaProducenta, NazwaKategorii from rowery inner join producenci on producenci.IDproducenta = rowery.IDproducenta inner join kategorierowerow on rowery.IDkategorii = kategorierowerow.IDkategorii;";
    $ret2 = mysqli_query($conn, $sql2);
    $ile2 = mysqli_num_rows($ret2);



echo "<table border='1'>";
echo "<tr>";
echo "<th>NazwaRoweru</th>";
echo "<th>OpisRoweru</th>";
echo "<th>CenaJednostkowa</th>";
echo "<th>NazwaProducenta</th>";
echo "<th>NazwaKategorii</th>";
echo "</tr>";

while($row2 = mysqli_fetch_assoc($ret2))
{
    echo "<tr>";
    echo "<td>".$row2["NazwaRoweru"]."</td>";
    echo "<td>".$row2["OpisRoweru"]."</td>";
    echo "<td>".$row2["CenaJednostkowa"]."</td>";
    echo "<td>".$row2["NazwaProducenta"]."</td>";
    echo "<td>".$row2["NazwaKategorii"]."</td>";
    echo "</tr>";
}

echo "</table>";




mysqli_close($conn);
?>  
    
</body>
</html>


