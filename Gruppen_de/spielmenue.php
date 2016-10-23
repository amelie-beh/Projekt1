<!--
	- - - - - - - - - - - - - - 
	- - - VIII. Spielmenü - - - 
	- - - - - - - - - - - - - -
	-68- PHP Ausgabe mit echo / Spieler xx ist am Zug und macht xx
	-15- Formular / Action ruft PHP Funktion auf
	-16- Label / Wähle deinen Spielzug:
	-29- Menü mit 4 Optionen / Auswahl des Spielzuges (Forscherkarte nehmen, Kartenauslagetausch(nur in Warschau möglich), Ausgrabung durchführen, Ausstellung durchführen)
	-30- PHP Ausgabe mit echo / Grabungserfolg
	-31- PHP Ausgabe mit echo / Grabungserlaubnis
	-33- PHP Ausgabe mit echo / Ruhmpunkte
	-39- PHP Ausgabe / Inventar -> Forscherkarten und Ausstellungskarten im Besitz
-->

<!-- Text wird durch eine PHP Funktion generiert : "Spieler xx ist am Zug und macht xx"
Wahrscheinlich so ähnlich (Variablen sind noch nicht genau definiert):
	<?php
		//echo $player , "ist am Zug und macht" , $spielzug;
	?>
-->

<form action=function_playersturn.php>
	<label>Wähle deinen Spielzug:
			<select name=spielzug size=4>
				<option>Forscherkarte nehmen</option>
				<option>Kartenauslagetausch</option> <!-- If-Funktion: Diese Option ist nur visible, wenn Spieler sich in Warschau befindet -->
				<option>Ausgrabung durchführen</option>
				<option>Ausstellung durchführen</option>
			</select>
	</label>
</form>

<!-- Texte und Werte werden durch echo Ausgabe wieder gegeben, wahrscheinlich so:
<?php
//echo "Grabungserfolg: " , $grabungserfolg;
//echo "Grabungserlaubnis: " , "Griechenland: " , $grabungserlaubnis_griechenland (boolean), ...;
//echo "Ruhmpunkte: " , $ruhmpunkte;
?>
-->

<!-- Inventar wird über PHP generiert. Hierbei wird von der DB bezogen, welche Forscherkarten und Ausstellungskarten der Spieler besitzt.. Diese werden als Tabelle angezeigt -->
