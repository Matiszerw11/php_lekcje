<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularz</title>
</head>
<body>
    <p>strona ta prezentuje sposób przesyłania danych z formularza na serwer.
        dane przesłane na serwer są przechwytywane przez skrypt php umieszczony w tym samym pliku.
        ten przykład wykorzystuje metodę get do przesłania danych z formularza.
        metoda ta powołuje że przesłane dane są widoczne w adresie strony
    </p>

    <form action="p4.php" method="GET">
        <p>Imie: <input type="text" name="imie"></p>
        <p>Imie: <input type="number" name="wiek"></p>
        <input type="sumbit" name="dane" value="wyślij">
    </form>

    <?php
    if($_GET["dane"])
    {
    $imie = $_GET[imie];
    $wiek = $_GET[wiek];


    echo "<h1>Witaj "$imie. Podałeś że masz $wiek. lat </h1>
    }
    ?>
</body>
</html>