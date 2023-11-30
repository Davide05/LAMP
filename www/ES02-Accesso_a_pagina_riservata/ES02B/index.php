<html>
<head>
	<title>Richiesta credenziali per l'accesso all'area riservata</title>
</head>
<body>
<h1>Richiesta credenziali per l'accesso all'area riservata</h1>
<h1>Home page - Davide Hu</h1><br><br>
<h2>username = davide;<br>
    password = capra;</h2><br><br>
	<?php
	if(isset($_POST["username"]) && isset($_POST["password"])) 
	{
		$user=$_POST["username"];
		$password=$_POST["password"];
	
		if($user!="davide"||$password!="capra")
		{
			echo"<p style='color: red;'>Nome utente o password sbagliato</p>";
		}
		else
		{
			echo"<p style='color: green;'>Benvenuto $user</p>";
		}
	}
	else
	{
		echo<<<END
			<form name="frmlogin" method="post" action="{$_SERVER['PHP_SELF']}">
			Username:<input type="text" name="username"><br>
			Password:<input type="password" name="password"><br>
			<input type="submit" name="submit">
			</form>
		END;
	}
	?>
</body>
</html>