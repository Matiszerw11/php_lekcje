<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>podaj liczbe do sprawdzenia</p>
<form action="p8.php" method="POST">
<input type="number" name="liczba1">


<button type="submit" name="sprawdz">sprawdź</button>
</form>
<?php
 if(isset($_POST["sprawdz"]))
    {
        $l1 = $_POST["liczba1"];
        
    function czyPierwsza($l1) 
    {
    if ($l1 < 2) 
    {
        return false;
    }

    for ($i = 2; $i < $l1; $i++) 
    {
        if ($l1 % $i == 0) 
        {
            return false;
        }
    }
    return true;
    }
        if (czyPierwsza($l1)) 
        {
        echo "ta liczba jest pierwsza";
        } else 
        {
        echo "ta liczba nie jest pierwsza";
        }

    }

?>
</body>
</html>