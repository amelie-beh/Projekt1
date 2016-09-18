<!doctype html>
<html lang=de>
	<head>
		<meta charset=utf-8>
			<title></title>
	</head>
		<body>
			<main>
			<!--
				- - - - - - - - - - - - - - - - -
				- - - XI. Account erstellen - - -
				- - - - - - - - - - - - - - - - -
				-71- Überschrift ("Account erstellen")
				-74- Absatz
				-01- Label (für Username)
				-74- Absatz
				-02- Label (für Passwort)
				-74- Absatz
				-38- Label (Passwort bestätigen)
				-74- Absatz
				-37- Label (Email Adresse eingeben)
				-74- Absatz
				-03- Schaltfläche (Bestätigen, Link zu view_startseite)
				-74- Absatz
				-05- Link (Anzeige Spielregeln, Link zu view_spielregeln)
				
			-->
				<h1>Account erstellen</h1>
				<!--Formular muss Eintragung in Datenbank für diesen Spieler übernehmen-->
				<form>
						<p><label for="name">Name: <input id=name name=name> </label></p>
						<p><label for="pw">Passwort: <input id=pw name=pw> </label></p>
						<p><label for="pw2">Passwort bestätigen: <input id=pw2 name=pw2> </label></p> <!-- Überprüfung ob beide PWs übereinstimmen-->
						<p><label for="email">EMail: <input id=email name=email> </label></p>
					</form>
				
					<form action=view_startseite.php target=_self>
						<p><input type=submit value=Bestätigen></p>
					</form>
					
						<p><a href=view_spielregeln.php>Spielregeln</a></p>
			</main>
			
			<?php include ("Gruppen_de/footer.html"); ?>		
			
		</body>
</html>