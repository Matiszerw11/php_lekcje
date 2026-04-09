<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style = "color: blue">Porównanie skryptu JS z PHP</h1>

    <?php
        for($i = 1; $i <= 3; $i++ )
        {
            echo "<h1 style = 'color:red' >Pierwsza aplikacja PHP</h1>";
        }
    ?>

    <script>
        for(let i = 1; i<=3; i++)
        {
            document.write("<h1 style = 'color: green' >Teskst pochodzący z JavaScript</h1>");
        }
    </script>
</body>
</html>