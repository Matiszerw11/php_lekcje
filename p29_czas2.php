<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <p>Wybierz date: <input type="date" name="data" /></p>
    <input type="submit" value="Ile dni ?" name="roznica"/>
</form>

<?php
if(isset($_POST["roznica"]))
{
    $d1 = $_POST["data"];

    echo "<br>Wybrałeś: " . $d1;
}
?>

</body>
</html>