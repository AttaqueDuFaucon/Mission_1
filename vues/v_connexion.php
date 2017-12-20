<!DOCTYPE html>						
<html>

    <head>
        <title>Connexion</title>
        <link href="styles/cssGeneral.css" rel="stylesheet" media="screen">
    </head>
	
    <body>
	
     <div id="connexion">
	 <form method="POST" action="index.php?uc=gestion&action=validConnexion">
			login: </br><input type="text" size="13" name="user" value=""> </br>
			mot de passe: </br><input type="text" size="13" name="mdp" value=""> </br>
			<br></br>
			<input type="submit" value="Valider" name="valider">
			</form>
        </div>
		
    </body>
	
</html>