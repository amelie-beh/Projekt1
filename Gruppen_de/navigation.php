<!--
- - - - - - - - - - - - -
- - - I. Navigation - - -
- - - - - - - - - - - - -
-11- Formular
-01- Label / Username:
-12- Input / name
-74- Absatz
-02- Label / Passwort:
-13- Input / pw
-74- Absatz
-15- Formular / Action ruft PHP Funktion auf
-03- Input / login
-74- Absatz
-36- Link / Registrieren, Link zu view_account
-74- Absatz
-05- Link / Spielregeln, Link zu view_spielregeln (wird in neuem Fenster geöffnet)
-->
	
<nav>
	<form>
		<p><label for="name">Name: <input id=name name=name> </label></p>
		<p><label for="pw">Passwort: <input id=pw name=pw> </label></p>
	</form>
				
	<!-- function_login muss noch geschrieben werden (soll überprüfen, ob Login Daten mit Datenbank Daten übereinstimmen -->	
	<form action=function_login.php method=POST>
		<input type=submit value=Einloggen name=login />
	</form>
					
	<p><a href=view_account.php>Registrieren</a></p>				
	<p><a href=view_spielregeln.php target=_blank>Spielregeln</a></p>
</nav>
