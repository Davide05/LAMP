<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella dei numeri Quadrati e Cubi</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se il form è stato inviato
    $numero = $_POST["numero"];

    // Controlla se il numero è compreso tra 1 e 10
    if ($numero >= 1 && $numero <= 10) {
        // Genera la tabella
        echo "<h1>Tabella dei quadrati e cubi da 1 a $numero</h1>";
        echo "<table border='2'>";
        echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";
        for ($i = 1; $i <= $numero; $i++) {
            $quadrato = $i * $i;
            $cubo = $i * $i * $i;
            //tr=riga       td=colonna
            echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
        }
        echo "</table>";
    } else {
        // Se il numero non è compreso tra 1 e 10, mostra un messaggio di errore
        echo "<p style='color: red;'>Inserisci un numero compreso tra 1 e 10.</p>";
    }
} else {
    // Se il form non è stato inviato, mostra il form
    ?>
    <h1>Inserisci un numero da 1 a 10</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Seleziona un numero:</label>
        <select name="numero" id="numero">
            <?php
            // Genera le opzioni del menu a tendina
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" name="submit" value="Crea tabella">
    </form>
    <?php
}
?>
</body>
</html>