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

    <form action="p5.php" method="POST">
        <p>Imie: <input type="text" name="imie"></p>
        <p>Wiek: <input type="number" name="wiek"></p>
        <input type="submit" name="dane" value="wyślij">
    </form>

    <?php
    if($_POST["dane"])
    {
    $imie = $_POST["imie"];
    $wiek = $_POST["wiek"];


    echo "<h1>Witaj $imie. Podałeś, że masz $wiek lat.</h1>";
    }
    ?>
</body>
</html>