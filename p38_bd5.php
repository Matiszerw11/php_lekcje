<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Podaj dolny zakres: <input type="number" name="zakresd"></p>
    <p>Podaj górny zakres: <input type="number" name="zakresg"></p>
    <input type="submit" value="pokaż" name="zapisz">
</form>

<?php

if(isset($_POST["zapisz"]))
{

$server = "localhost";
$user = "root";
$pwd = "";
$bd = "hurtownia";

$conn = mysqli_connect($server, $user, $pwd, $bd); 

if($conn == false)
{
    die("nie udało się połączyć z bazą, błąd: ".mysqli_connect_error());
}
$zakresd = 0;
$zakresg = 0;

$zakresd = $_POST["zakresd"];
$zakresg = $_POST["zakresg"];

$sql = "SELECT ImiePracownika, NazwiskoPracownika, PlacaPracownika 
        FROM pracownicy
        WHERE PlacaPracownika >= $zakresd AND PlacaPracownika <= $zakresg";

$ret = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Imie pracownika</th>";
echo "<th>Nazwisko pracownika</th>";
echo "<th>Płaca pracownika</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($ret))
{
    echo "<tr>";
    echo "<td>".$row["ImiePracownika"]."</td>";
    echo "<td>".$row["NazwiskoPracownika"]."</td>";
    echo "<td>".$row["PlacaPracownika"]."</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
}
?>

</body>
</html>