<!--
	- - - - - - - - - - - - - - 
	- - - III. Neues Spiel - - -
	- - - - - - - - - - - - - - 
	-11- Formular
	-74- Absatz
	-74- Absatz					| jeweils 3x
	-04- Input / Radio Button	| jeweils 3x
	-06- 3x Label / 1, 2, 3
	-15- Formular / Action ruft PHP Funktion auf
	-74- Absatz
	-14- Input / Submit
-->
	<form>
		<p>Mit wie vielen Mitspielern möchtest du spielen?</p>
		<p><input type="radio" id="rb1" name="Gegner" value="1"><label for="rb1"> 1</label></p>
		<p><input type="radio" id="rb2" name="Gegner" value="2"><label for="rb2"> 2</label></p>
		<p><input type="radio" id="rb2" name="Gegner" value="3"><label for="rb3"> 3</label></p>
	</form>
				
	<!-- Spieleranzahl je nach Auswahl verändern, function_startgame leitet zum Spielfeld weiter -->
	<form action=function_startgame.php>
		<p><input type=submit value=Starten></p>
	</form>