<!--
	- - - - - - - - - - - - - - - - -
	- - - XI. Account erstellen - - -
	- - - - - - - - - - - - - - - - -
	-71- �berschrift ("Account erstellen")
	-74- Absatz
	-01- Label (f�r Username)
	-74- Absatz
	-02- Label (f�r Passwort)
	-74- Absatz
	-38- Label (Passwort best�tigen)
	-74- Absatz
	-37- Label (Email Adresse eingeben)
	-74- Absatz
	-03- Schaltfl�che (Best�tigen, Link zu view_startseite)
	-74- Absatz
	-05- Link (Anzeige Spielregeln, Link zu view_spielregeln)
-->
<h1>Account erstellen</h1>
<!--Formular muss Eintragung in Datenbank f�r diesen Spieler �bernehmen-->
	<form>
		<p><label for="name">Name: <input id=name name=name> </label></p>
		<p><label for="pw">Passwort: <input id=pw name=pw> </label></p>
		<p><label for="pw2">Passwort best�tigen: <input id=pw2 name=pw2> </label></p> <!-- �berpr�fung ob beide PWs �bereinstimmen-->
		<p><label for="email">EMail: <input id=email name=email> </label></p>
	</form>

	<form action=view_startseite.php target=_self>
		<p><input type=submit value=Best�tigen></p>
	</form>

	<p><a href=view_spielregeln.php>Spielregeln</a></p>