<html>
  <head>
    <title>Richiesta di accesso</title>
  </head>
  <body>
    <h1>Login</h1><br>
    <?php
    $user = $_POST["username"];
    $password = $_POST["password"];
    if ($user != "davide" || $password != "capra") {
    ?>
      <h2>Errore! Username o password errato.<br>
      Accesso negato!</h2>
    <?php
    } else {
      echo "<h3>Login riuscito</h3>";
      echo "<h3>Benvenuto nella mia pagina PHP " . $user . "</h3>";
    }
    ?>
  </body>
</html>