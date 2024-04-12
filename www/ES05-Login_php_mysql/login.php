<?php
session_start();
// Definizione delle costanti per la connessione al database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'nome_database');
define('DB_USER', 'nome_utente');
define('DB_PASSWORD', 'password');

try {
  // Connessione al database
  $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
  // Impostazione della modalità di gestione degli errori
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  // Gestione dell'eccezione
  echo "Errore di connessione: " . $e->getMessage();
  exit;
}
// Il codice seguente può utilizzare l'oggetto $pdo per effettuare query al database
// ...

// Chiudi la connessione al database
$pdo = null;

// Verifica se l'utente è già autenticato e reindirizza alla pagina di benvenuto
if (isset($_SESSION["username"])) {
    header('Location: riservata.php');
    exit;
}

// Verifica se il modulo di accesso è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? ""; 

    // Verifica se le credenziali sono corrette (Questo è solo un esempio dimostrativo)
    if ($username === 'davide' && $password === "888") {
        // Credenziali corrette, crea una variabile di sessione per l'autenticazione
        $_SESSION["username"] = $username;
        header('Location: riservata.php');
        exit;
    } else {
        $error_message = 'Credenziali non valide. Riprova.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Accesso</h1>
    <?php if (isset($error_message)) echo '<p style="color: red;">' . $error_message . '</p>'; ?>
    <h4>Credenziali:</h4>
    <h4>username: davide</h4>
    <h4>password: 888</h4>

    <form method="POST" action="">
        <label for="username">Nome utente:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Accedi">
    </form>
</body>
</html>
