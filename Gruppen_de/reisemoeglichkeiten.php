<!--
- - - - - - - - - - - - - - - - -
- - - V. Reisemöglichkeiten - - -
- - - - - - - - - - - - - - - - -
	-15- Formular / Action ruft PHP Funktion auf
	-09- 7x3 Tabelle / für Städte (Warschau, Berlin, Wien, London, Rom, Paris, Moskau + Anzeige ob und welche Spieler sich dort befinden)
	-03- 7x Input / Submit in Tabelle (Reise nach Warschau, Berlin, Wien, London, Rom, Paris, Moskau)
	-14- 7x PHP Ausgabe mit Echo / Anzeige ob sich ein Spieler in der Stadt befindet
	-17- 5x3 Tabelle / für Grabungsgebiete (Griechenland, Palästina, Ägypten, Mesopotamien, Kreta + Anzeige ob und welche Spieler sich dort befinden)
	-03- 5x Input / Submit in Tabelle (Reise nach Griechenland, Palästina, Ägypten, Mesopotamien, Kreta)
	-19- 5x PHP Ausgabe mit Echo / Anzeige ob sich ein Spieler in dem Land befindet
-->

	<!-- function_travel muss noch geschrieben werden-->
	<form action=function_travel.php method=POST>
		<!-- Start Tabelle Städte -->
		<table>
			<tr>
				<td>Warschau</td>
				<td><input type=submit value=Reisen name=warschau /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Berlin</td>
				<td><input type=submit value=Reisen name=berlin /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Wien</td>
				<td><input type=submit value=Reisen name=wien /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>London</td>
				<td><input type=submit value=Reisen name=london /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Rom</td>
				<td><input type=submit value=Reisen name=rom /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Paris</td>
				<td><input type=submit value=Reisen name=paris /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Moskau</td>
				<td><input type=submit value=Reisen name=moskau /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
		</table>

		<!-- Start Tabelle Länder -->
		<table>
			<tr>
				<td>Griechenland</td>
				<td><input type=submit value=Reisen name=griechenland /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Palästina</td>
				<td><input type=submit value=Reisen name=palästina /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Ägypten</td>
				<td><input type=submit value=Reisen name=aegypten /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Mesopotamien</td>
				<td><input type=submit value=Reisen name=mesopotamien /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
			<tr>
				<td>Kreta</td>
				<td><input type=submit value=Reisen name=kreta /></td>
				<td><!--PHP Funktion, Anzeige ob sich ein Spieler hier befindet--></td>
			</tr>
		</table>
	</form>
	
	<!--
	Feedback: Nutzen Sie bei so etwas bitte Arrays und Schleifen... -->