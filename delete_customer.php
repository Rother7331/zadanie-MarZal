<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Usuń klienta</title>
    <style>
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

            <input type="submit" onclick="" value="USUN">

    </form>
    <?php
$conn = mysqli_connect("localhost", "root", "", "erpdatabase");
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $adres = $_POST["Ilosc"];
        $email = $_POST["Dostepnosc"];
        $zapytanie = "DELETE FROM customers WHERE imie='$imie' AND nazwisko='$nazwisko' AND adres='$adres' AND e_mail='$email'";
        $sql = mysqli_query($conn, $zapytanie);
?>

</body>
</html>
