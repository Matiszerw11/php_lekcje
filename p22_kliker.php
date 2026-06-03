<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$liczba = 0;
$liczba = $_POST["liczba"];
if(isset($_POST["btKlik+"]))
{
    
    $liczba += 1;
}
if(isset($_POST["btKlik-"]))
{
    
    $liczba += -1;
}
if(isset($_POST["btKlik0"]))
{
    
    $liczba = 0;
}
?>

    <form action="p22_kliker.php" method="POST">
        <p>Imie: <input type="text" name="liczba" value="<?php echo $liczba ?>"/></p>
        <input type="submit" name="btKlik+" value="Inkrementuj"/>
        <input type="submit" name="btKlik-" value="Dekrementuj"/>
        <input type="submit" name="btKlik0" value="Reset"/>
    </form>

</body>
</html>