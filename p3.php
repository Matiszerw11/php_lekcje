<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Samochody</title>
    <style>
        th, td
        {
            padding: 5px;
        }
    </style>
</head>
<body>
 
    <?php
    $s1 = "Mercedes";
    $s2 = "Audi";
    $s3 = "Bmw";
    $s4 = "Nissan";
    $m1 = "C klasa";
    $m2 = "A4";
    $m3 = "M3";
    $m4 = "Gtr r35";
    
    echo "<h1>Tabela z samochodami</h1>";
    echo "<table border='1'>
    <tr>
        <th>Marka</th>
        <th>Model</th>
    </tr>
    <tr>
        <td>$s1</td>
        <td>$m1</td>
    </tr>
    <tr>
        <td>$s2</td>
        <td>$m2</td>
    </tr>
    <tr>
        <td>$s3</td>
        <td>$m3</td>
    </tr>
    <tr>
        <td>$s4</td>
        <td>$m4</td>
    </tr>
    </table>";
    ?>
 
</body>
</html>