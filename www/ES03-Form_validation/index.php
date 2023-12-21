<html>
<head>
    <title> ITCS ERASMO DA ROTTERDAM BOLLATE</title>
</head>
<body>
    <h1> INSERISCI I TUOI DATI DATI ANAGRAFICI </h1>
    <form method = "POST" action = 'login.php'>
        <!-- Nome -->
        <label> Inserisci nome :</label><br>
        <input name = "nome" id = "nome" type = "text" placeholder = "nome" required pattern="[A-Za-z\s]+"><br><br>
        <!-- Cognome -->
        <label> Inserisci cognome: </label><br>
        <input name = "cognome" id = "cognome" type = "text" placeholder = "cognome" required pattern="[A-Za-z\s]+"><br><br>
        <!-- Data nascita gg/mm/aaaa -->
        <label> Data di nascita: </label><br>
        <input name = "nascita" id = "nascita" type = "date" placeholder = "nascita" required><br><br>
        <!-- Codice_fiscale -->
        <label> Codice fiscale: </label><br>
        <input name = "codice_fiscale" id = "codice_fiscale" type = "text" placeholder = "codice fiscale" 
        pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"><br><br>
        <!-- Email -->
        <label> Inserisci una email: </label><br>
        <input name = "email" id = "email" type = "email" placeholder = "email" required><br><br>
        <!-- Numero di telefono -->
        <label> Inserisci il numero di telefono: </label><br>
        <input name = "prefisso" id = "prefisso" type = "text" placeholder = "prefisso esempio:+39" pattern="\+[0-9]{2,4}">
        <input name = "numero" id = "numero" type = "text" placeholder = "numero" pattern="[0-9]{10}"><br><br>
        <!-- Via, cap, comune, provincia-->
        <label> Indirizzo: </label><br>
        <input name = "via" id = "via" type = "text" placeholder = "via" required>
        <input name = "cap" id = "cap" type = "text" placeholder = "cap" required>
        <input name = "comune" id = "comune" type = "text" placeholder = "comune" required>
        <input name = "provincia" id = "provincia" type = "text" placeholder = "provincia" required><br><br>
        
        <label> Nickname: </label><br>
        <input name = "nickname" id = "nickname" type = "text" placeholder = "davide"><br>
        <label> Password: </label><br>
        <input name = "password" id = "password" type = "password" placeholder = "Hu2005?"><br>
        Password valida:
        <br>- almeno 8 caratteri;
        <br>- almeno una lettera maiuscola;
        <br>- almeno un numero;
        <br>- almeno un carattere speciale;<br><br>

        <input type = "submit" value = "ACCEDI"> <!-- pulsante per accedere -->
    </form>
</body>
</html>