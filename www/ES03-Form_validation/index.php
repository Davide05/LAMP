<html>
<head>
    <title> ITCS ERASMO DA ROTTERDAM BOLLATE</title>
</head>
<body>
    <h1> INSERISCI I TUOI DATI DATI ANAGRAFICI </h1>
    <form method = "POST" action = 'login.php'>
        <label> Inserisci nome :</label><br>
        <input name = "nome" id = "nome" type = "text" placeholder = "nome" required pattern="[A-Za-z\s]+"><br>
        <label> Inserisci cognome: </label><br>
        <input name = "cognome" id = "cognome" type = "text" placeholder = "cognome" required pattern="[A-Za-z\s']+"><br>
        <label> Inserisci dato di nascita: </label><br>
        <input name = "nascita" id = "nascita" type = "date" placeholder = "nascita" required><br>
        <label> Inserisci codice fiscale: </label><br>
        <input name = "codice_fiscale" id = "codice_fiscale" type = "text" placeholder = "codice fiscale" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"><br>
        <label> Inserisci una email: </label><br>
        <input name = "email" id = "email" type = "email" placeholder = "email" required><br>
        <label> Inserisci il numero di telefono (prefisso, numero)</label><br>
        <input name = "prefisso" id = "prefisso" type = "text" placeholder = "prefisso" pattern="\+[0-9]{1,4}">
        <input name = "numero" id = "numero" type = "text" placeholder = "numero" pattern="[0-9]{10}"><br>
        <label> Inserisci indirizzo (via, cap, comune, provincia): </label><br>
        <input name = "via" id = "via" type = "text" placeholder = "via" required>
        <input name = "cap" id = "cap" type = "text" placeholder = "cap" required>
        <input name = "comune" id = "comune" type = "text" placeholder = "comune" required>
        <input name = "provincia" id = "provincia" type = "text" placeholder = "provincia" required><br>
        <label> Inserisci il nickname: </label><br>
        <input name = "nickname" id = "nickname" type = "text" placeholder = "nickname"><br>
        <label> Inserisci la password: </label><br>
        <input name = "password" id = "password" type = "password" placeholder = "password"><br>
        <input type = "submit" value = "ACCEDI"> <!-- pulsante di accedi -->
    </form>
</body>
</html>