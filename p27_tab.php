<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <p>Imiona po gwiazdce: <input type="text" name="imiona"></p>
        <input type="submit" value="rozdziel" name="btrozdziel">

    </form>
    

    <?php
    
if(isset($_POST["btrozdziel"]))
    {
        $imie = htmlspecialchars(trim($_POST["imiona"]));

        $tab = explode("*", $imie);
        sort($tab);
        $rozdziel = 0;
        

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Imiona</th>";
        echo "</tr>";
        
        
        foreach($tab as $imie)
        {
            echo "<tr>";
            echo "<td>";
            echo $imie;
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</body>
</html>