<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <p>Liczby po średniku: <input type="text" name="liczby"></p>
        <input type="submit" value="Oblicz sumę" name="btsuma">

    </form>
    

    <?php
    
if(isset($_POST["btsuma"]))
    {
        $x = htmlspecialchars(trim($_POST["liczby"]));

        $tab = explode(";", $x);
        $suma = 0;
        foreach($tab as $liczba)
        {
            $suma += $liczba;
        }

echo "Suma = $suma";

    }
    ?>
</body>
</html>