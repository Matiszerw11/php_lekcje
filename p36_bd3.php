<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Dane klienta</h1>
<form action="" method="post">
    <p>Imie: <input type="text" name="imie"></p>
    <p>Nazwisko: <input type="text" name="nazwisko"></p>
    <p>IDwojewodztwa: <input type="number" name="idwoj"></p>
    <p>Kod pocztowy: <input type="text" name="kodpocztowy"></p>
    <p>Miasto: <input type="text" name="miasto"></p>
    <p>Ulica: <input type="text" name="ulica"></p>
    <p>Numer domu: <input type="number" name="nrdomu"></p>
    <input type="submit" value="zapisz" name="zapisz">
</form>

<?php

if(isset($_POST["zapisz"]))
{
$imie = htmlspecialchars(trim($_POST["imie"]));
$nazwisko = htmlspecialchars(trim($_POST["nazwisko"]));
$idwoj = htmlspecialchars(trim($_POST["idwoj"]));
$kodpocztowy = htmlspecialchars(trim($_POST["kodpocztowy"]));
$miasto = htmlspecialchars(trim($_POST["miasto"]));
$ulica = htmlspecialchars(trim($_POST["ulica"]));
$nrdomu = htmlspecialchars(trim($_POST["nrdomu"]));



 $server = "localhost";
    $user = "root";
    $pwd = "";
    $bd = "hurtownia";

    $conn = mysqli_connect($server, $user, $pwd, $bd);

    if($conn == false)
        {
            die("nie udało się połączyć z bazą, błąd: ".mysqli_connect_error());
        }
            echo "zostałeś połączony z bazą";

            $sql1 = "INSERT INTO klienci(ImieKlienta, NazwiskoKlienta, IDwojewodztwa, KodPocztowyKlienta, MiastoKlienta, UlicaKlienta, NrDomuKlienta) 
            VALUES('$imie','$nazwisko',$idwoj,'$kodpocztowy','$miasto','$ulica',$nrdomu);";

            $ret = mysqli_query($conn, $sql1);

            if($ret == true)  
                echo "<br>Rekord został dodany";

            
            mysqli_close($conn);
        
            
} 
?>
    
</body>
</html>





