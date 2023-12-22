<html>
<head>
    <title> ITCS ERASMO DA ROTTERDAM </title>
</head>
<body>
    <h1> Controllo delle Credenziali ITCS ERASMO DA ROTTERDAM </h1>

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
            echo "<br><br>Cognome non valido<br>";
        }else {
            echo "<br><br>Cognome inserito correttamente:<br>" . htmlspecialchars($cog);
        }
        //controllo codice fiscale
        if (empty($codiceFiscale)) {
            echo "<br><br>Codice fiscale non valido<br>";
        } else {
            echo "<br><br>Codice fiscale inserito correttamente:<br>" . htmlspecialchars($codiceFiscale);
        }
        //controllo nascita
        if (empty($nascita)) {
            echo "<br><br>Data di nascita!<br>";
        }else {
            echo "<br><br>Data di Nascita inserita correttamente:<br>" . htmlspecialchars($nascita);
        }
        //controllo email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<br><br>Email non valida<br>";
        }else {
            echo "<br><br>Email inserito correttamente:<br>" . htmlspecialchars($email);
        }
        //controllo numero telefono
        if (!empty($numero)) {
            echo "<br><br>Numero non valido<br>";
        } else {
            echo "<br><br>Numero di telefono inserito correttamente:<br>" . htmlspecialchars($numero);
        }

        if ($nickname === $nome || $nickname === $cog) {
            echo "<br><br>Il nickname deve essere diverso da nome e cognome!<br>";
        } else {
            echo "<br><br>Nickname valido:<br>" . htmlspecialchars($nickname);
        }
        if (strlen($password) < 8 || !preg_match('/[A-Z]+/', $password) || !preg_match('/[0-9]+/', $password) || !preg_match('/[^A-Za-z0-9]+/', $password)) {
            echo "<br>Password non è valida:";
            echo "<br>- almeno 8 caratteri";
            echo "<br>- almeno una lettera maiuscola";
            echo "<br>- almeno un numero";
            echo "<br>- almeno un carattere speciale<br>";
        } else {
            echo "<br>Password valido:<br>" . htmlspecialchars($password);
        }
    }
 ?>
</body>
</html>