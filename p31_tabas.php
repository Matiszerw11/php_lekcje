<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action = "p31_tabas.php" method = "POST">
        <p>Marka: <input type="text" name = "marka"/></p>
        <p>Model: <input type="text" name = "model"/></p>
        <p>Rocznik: <input type="number" name = "rocznik"/></p>
        <p>Cena: <input type="number" name = "cena"/></p>
        <input type = "submit" name = "dotabeli" value = "do tabeli"/>

    </form>


    <?php

    if(isset($_POST["dotabeli"]))
    {


    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $rocznik = $_POST["rocznik"];
    $cena = $_POST["cena"];

    $auto = array(
        "Marka" => $marka,
        "Model" => $model,
        "Rocznik" => $rocznik,
        "Cena" => $cena
    );

    echo "<table border='1'>";
    
    foreach ($auto as $x => $y) 
    {
        echo "<tr>";
        echo "<td>$x</td>";
        echo "<td>$y</td>";
        echo "</tr>";
    }

    echo "</table>";

    }
    ?>
    
</body>
</html>

