<html>
<head>
    <title> ITCS ERASMO DA ROTTERDAM </title>
</head>
<body>
    <h1> Controllo Credenziali ITCS ERASMO DA ROTTERDAM </h1>

 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nome = trim($_POST["nome"]);
        $cog = trim($_POST["cognome"]);
        $nascita = $_POST["nascita"];
        $codiceFiscale = trim($_POST["codice_fiscale"]);
        $email = trim($_POST["email"]);
        $numero = trim($_POST["numero"]);
        $indVia = trim($_POST["via"]);
        $indCap = trim($_POST["cap"]);
        $indComune = trim($_POST["comune"]);
        $indProvincia = trim($_POST["provincia"]);
        $nickname = trim($_POST["nickname"]);
        $password = ($_POST["password"]);
        //controllo nome
        if (!preg_match('/^[A-Za-z ]+$/', $nome)) {
            echo "<br>Nome non valido<br>";
        }else {
            echo "<br>Nome inserito correttamente:<br>" . htmlspecialchars($nome);
        }
        //controllo cognome
        if (!preg_match('/^[A-Za-z \'&]+$/', $cog)) {
            echo "<br>I caratteri inseriti per il cognome non sono validi<br>";
        }else {
            echo "<br>Cognome inserito correttamente:<br>" . htmlspecialchars($cog);
        }
        //controllo codice fiscale
        if (empty($codiceFiscale)) {
            echo "<br>Codice fiscale non inserito<br>";
        } else {
            echo "<br>Codice fiscale inserito correttamente:<br>" . htmlspecialchars($codiceFiscale);
        }
        //controllo nascita
        if (empty($nascita)) {
            echo "<br>Non hai inserito la data di nascita!<br>";
        }else {
            echo "<br>Data di Nascita inserita correttamente:<br>" . htmlspecialchars($nascita);
        }
        //controllo email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<br>La mail inserita non è valida<br>";
        }else {
            echo "<br>Email corretta:<br>" . htmlspecialchars($email);
        }
        //controllo numero telefono
        if (!empty($numero)) {
            echo "<br>Il numero di telefono non è valido<br>";
        } else {
            echo "<br>Numero di telefono corretto:<br>" . htmlspecialchars($numero);
        }

        
        if ($nickname === $nome || $nickname === $cog) {
            echo "<br>Il nickname deve essere diverso da nome e cognome!<br>";
        } else {
            echo "<br>Nickname valido:<br>" . htmlspecialchars($nickname);
        }

        if (strlen($password) < 8 || !preg_match('/[A-Z]+/', $password) || !preg_match('/[0-9]+/', $password) || !preg_match('/[^A-Za-z0-9]+/', $password)) {
            echo "<br>La password non è valida<br>";
        } else {
            echo "<br>Password valida<br>" . htmlspecialchars($password);
        }
    }
 ?>
</body>
</html>