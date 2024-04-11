<?php
session_start();

// Verifica se l'utente è già autenticato e reindirizza alla pagina di benvenuto
if ( isset($_SESSION["username"]) ) {
    header('Location: riservata.php');
    exit;
}

// Verifica se il modulo di accesso è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? ""; 

    // Verifica se le credenziali sono corrette
    if ($username === 'davide' && $password === "888") {
        // Credenziali corrette, crea una variabile di sessione per l'autenticazione
        $_SESSION["username"] = $username;
        header('Location: riservata.php');
        exit;
    } else {
        echo 'Credenziali non valide. Riprova.';
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