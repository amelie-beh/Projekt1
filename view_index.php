<!doctype html>
<html lang=de>
	<head>
		<meta charset=utf-8>
			<title></title>
	</head>
		<body>
			<main>
			<!--
				- - - - - - - - - - - 
				- - - I. Log In - - -
				- - - - - - - - - - - 
				-69- Überschrift ("Log In")
				-74- Absatz
				-01- Label (für Username)
				-74- Absatz
				-02- Label(für Passwort)
				-74- Absatz
				-03- Schaltfläche (Bestätigen, Link zu view_startseite)
				-74- Absatz
				-36- Link (Account erstellen, Link zur view_account)
				-74- Absatz
				-05- Link (Anzeige Spielregeln, Link zu view_spielregeln)
			-->
				<h1>Log In</h1>
					<form>
						<p><label for="name">Name: <input id=name name=name> </label></p>
						<p><label for="pw">Passwort: <input id=pw name=pw> </label></p>
					</form>
				
					<!-- if-Abfrage ob Nutzername und Passwort übereinstimmt -->
					<form action=view_startseite.html target=_self>
						<p><input type=submit value=Bestätigen></p>
					</form>
					
						<p><a href=view_spielregeln.html>Spielregeln</a></p>
						<p><a href=view_account.html>Account erstellen</a></p>
					
			</main>
			
			<?php include ("Gruppen_de/footer.html"); ?>
			
		</body>
</html>