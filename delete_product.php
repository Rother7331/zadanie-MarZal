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
        <label for="Nazwa">Nazwa: </label>
            <input type="text" id="Nazwa" name="Nazwa"><br><br>
        <label for="Opis">Opis: </label>
            <input type="text" id="Opis" name="Opis"><br><br>
        <label for="Ilosc">Ilosc: </label>
            <input type="text" id="Ilosc" name="Ilosc"><br><br>
        <label for="Dostepnosc">Dostepnosc: </label>
            <input type="text" id="Dostepnosc" name="Dostepnosc"><br><br>

            <input type="submit" onclick="" value="USUN">

    </form>
$conn = mysqli_connect("localhost", "root", "", "erpdatabase");
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $adres = $_POST["Ilosc"];
        $email = $_POST["Dostepnosc"];
        $zapytanie = "DELETE FROM products WHERE nazwa='$nazwa' AND opis='$opis' AND cena='$cena' AND Dostepnosc='$Dostepnosc'";
        $sql = mysqli_query($conn, $zapytanie);
?>
</body>
</html>
