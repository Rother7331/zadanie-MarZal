<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Dodaj klienta</title>
    <style>
         *{
            text-align:center;
            text-align
        }
    </style>
</head>

<body>
    <form action="add_customer.php" method="post">
        <label for="imie">Imie: </label>
            <input type="text" id="imie" name="imie"><br><br>
        <label for="nazwisko">Nazwisko: </label>
            <input type="text" id="nazwisko" name="nazwisko"><br><br>
        <label for="adres">Adres zamieszkania: </label>
            <input type="text" id="adres" name="adres"><br><br>
        <label for="email">Email: </label>
            <input type="text" id="email" name="email"><br><br>

            <input type="submit" onclick="" value="DODAJ">

    </form>

<?php
$conn = mysqli_connect("localhost", "root", "", "erpdatabase");
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $adres = $_POST["adres"];
        $email = $_POST["email"];
        $zapytanie = "INSERT into customers(imie,nazwisko,adres,email) values  ('$imie','$nazwisko','$adres','$email')";
        $sql = mysqli_query($conn, $zapytanie);
?>
