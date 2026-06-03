<?php
include "funkcje.php";


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="p21_funkcje5.php" method="POST">
    <p>Wpisz a: 
        <input type="number" name="a"/>
    </p>
    <p>Wpisz b: 
        <input type="number" name="b"/>
    </p>
    <p>Wpisz c: 
        <input type="number" name="c"/>
    </p>

    <input type="submit" value="Delta" name="btDelta"/>
</form>

<?php

if(isset($_POST["btDelta"]))
{
    $a = intval($_POST["a"]);
    $b = intval($_POST["b"]);
    $c = intval($_POST["c"]);

    $delta = Delta($a, $b, $c);
    echo "delta to: ";
    echo $delta;
    echo "\n";

    if($delta < 0)
        {
            echo "nie ma pierwiastków";
        }
        else
            {
                if($delta == 0)
                    {
                        $p = ($b * -1) / 2 * $a;
                        echo "jest jeden pierwiastek: ";
                        echo "\n";
                        echo $p;
                    }
                    else
                        {
                            $p1 = (($b * -1) - sqrt($delta)) / (2 * $a);
                            $p2 = (($b * -1) + sqrt($delta)) / (2 * $a);

                            echo "są dwa pierwiastki: ";
                            echo "\n";
                            echo $p1;
                            echo "\n";
                            echo $p2;
                        }
            }
}

?>

</body>
</html>

