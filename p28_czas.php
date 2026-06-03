<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $wakacje = mktime(0, 0, 0, 6, 27, 2026);

    echo "Wakacje zaczynają się: " . date("d-m-Y, H:i:s", $wakacje);

    $dzisiaj = time();

    echo "<br>Dzisiaj jest: " . date("d-m-Y, H:i:s", $dzisiaj);

    $roznica = $wakacje - $dzisiaj;

    echo "<br>Ilość sekund do wakacji: $roznica";

    $ileDni = $roznica / (60 * 60 * 24);

    echo "<br>Ilość dni do wakacji: " . round($ileDni);
?>

</body>
</html>