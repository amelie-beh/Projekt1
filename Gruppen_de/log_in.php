<!--
	- - - - - - - - - - - 
	- - - I. Log In - - -
	- - - - - - - - - - - 
	-69- �berschrift ("Log In")
	-74- Absatz
	-01- Label (f�r Username)
	-74- Absatz
	-02- Label(f�r Passwort)
	-74- Absatz
	-03- Schaltfl�che (Best�tigen, Link zu view_startseite)
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
				
	<!-- if-Abfrage ob Nutzername und Passwort mit DB �bereinstimmt -->
	<form action=view_startseite.php target=_self>
		<p><input type=submit value=Best�tigen></p>
	</form>
					
	<p><a href=view_spielregeln.php>Spielregeln</a></p>
	<p><a href=view_account.php>Account erstellen</a></p>