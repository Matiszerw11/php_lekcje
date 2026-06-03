<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Podaj dane ucznia:<input type="text" name="daneucznia"></p>
    <input type="submit" value="do listy" name="dolisty">
</form>

<?php

if(isset($_POST["dolisty"]))
{
    $dane = $_POST["daneucznia"];

    if(($dane == ""))
    {
        echo "<p>Nie podano danych</p>";
    }
    else
    {
     
        $dane = trim($dane);

     
        $dane = htmlspecialchars($dane);

 
        $tab = explode("*", $dane);

        if(count($tab) == 4)
        {
            echo "<p>Dane ucznia:</p>";
            echo "<ul>";
            echo "<li>Imię: $tab[0]</li>";
            echo "<li>Nazwisko: $tab[1]</li>";
            echo "<li>Klasa: $tab[2]</li>";
            echo "<li>Średnia: $tab[3]</li>";
            echo "</ul>";
        }
        
    }
}

?>

</body>
</html>