<!--
	- - - - - - - - - - - - - - - - -
	- - - XI. Account erstellen - - -
	- - - - - - - - - - - - - - - - -
	-71- h1 �berschrift / Account erstellen
	-11- Formular
	-74- Absatz
	-01- Label / Username:
	-74- Absatz
	-02- Label / Passwort:
	-74- Absatz
	-38- Label / Passwort best�tigen:
	-74- Absatz
	-37- Label / Email Adresse eingeben:
	-15- Formular / Action ruft PHP Funktion auf
	-74- Absatz
	-03- Input / Submit
-->
<h1>Account erstellen</h1>
<!--Formular muss Eintragung in Datenbank f�r diesen Spieler �bernehmen-->
	<form>
		<p><label for="name">Name: <input id=name name=name> </label></p>
		<p><label for="pw">Passwort: <input id=pw name=pw> </label></p>
		<p><label for="pw2">Passwort best�tigen: <input id=pw2 name=pw2> </label></p> <!-- �berpr�fung ob beide PWs �bereinstimmen-->
		<p><label for="email">EMail: <input id=email name=email> </label></p>
	</form>

	<form action=function_newaccount.php>
		<p><input type=submit value=Best�tigen></p>
	</form>