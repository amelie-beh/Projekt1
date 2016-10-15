<!--
- - - - - - - - - - - - - - - - -
- - - V. Reisemöglichkeiten - - -
- - - - - - - - - - - - - - - - -
	-09- Tabelle für Städte 7x3 (Warschau, Berlin, Wien, London, Rom, Paris, Moskau + Anzeige ob und welche Spieler sich dort befinden)
	-52- Text ("Warschau")
	-53- Text ("Berlin")
	-54- Text "Wien")
	-55- Text ("London")
	-56- Text ("Rom")
	-57- Text ("Paris")
	-58- Text ("Moskau")
	-10- Schaltfläche in Tabelle (Reise nach Warschau)
	-11- Schaltfläche in Tabelle (Reise nach Berlin)
	-12- Schaltfläche in Tabelle (Reise nach Wien)
	-13- Schaltfläche in Tabelle (Reise nach London)
	-14- Schaltfläche in Tabelle (Reise nach Rom)
	-15- Schaltfläche in Tabelle (Reise nach Paris)
	-16- Schaltfläche in Tabelle (Reise nach Moskau)
	-40- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in Warschau befindet)
	-41- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in Berlin befindet)
	-42- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in Wien befindet)
	-43- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in London befindet)
	-44- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in Rom befindet)
	-45- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in Paris befindet)
	-46- Leeres Feld in Tabelle für Städte (später wird hier angezeigt, ob sich ein Spieler in Moskau befindet)
	-17- Tabelle für Grabungsgebiete 5x3 (Griechenland, Palästina, Ägypten, Mesopotamien, Kreta + Anzeige ob und welche Spieler sich dort befinden)
	-59- Text ("Griechenland")
	-59- Text ("Palästina")
	-59- Text ("Ägypten")
	-59- Text ("Mesopotamien")
	-59- Text ("Kreta")
	-18- Schaltfläche in Tabelle (Reise nach Griechenland)
	-19- Schaltfläche in Tabelle (Reise nach Palästina)
	-20- Schaltfläche in Tabelle (Reise nach Ägypten)
	-21- Schaltfläche in Tabelle (Reise nach Mesopotamien)
	-22- Schaltfläche in Tabelle (Reise nach Kreta)
	-47- Leeres Feld in Tabelle für Grabungsgebiete (später wird hier angezeigt, ob sich ein Spieler in Griechenland befindet)
	-48- Leeres Feld in Tabelle für Grabungsgebiete (später wird hier angezeigt, ob sich ein Spieler in Palästina befindet)
	-49- Leeres Feld in Tabelle für Grabungsgebiete (später wird hier angezeigt, ob sich ein Spieler in Ägypten befindet)
	-50- Leeres Feld in Tabelle für Grabungsgebiete (später wird hier angezeigt, ob sich ein Spieler in Mesopotamien befindet)
	-51- Leeres Feld in Tabelle für Grabungsgebiete (später wird hier angezeigt, ob sich ein Spieler in Kreta befindet)
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