<!--
	- - - - - - - - - - - - - - - - - - 
	- - - VII. Ausstellungskarten - - - 
	- - - - - - - - - - - - - - - - - - 
	-28- 3 Tabellen für Ausstellungskarten 4x3 (Kartennummer, Anzeige Stadt, Dauer und Beschreibung)
	-64- Schaltfläche (Ausstellungskarte 1 nehmen)
	-65- Schaltfläche (Ausstellungskarte 2 nehmen)
	-66- Schaltfläche (Ausstellungskarte 3 nehmen)
	-67- Schaltfläche (Ausstellungskarte 4 nehmen)
-->

<!-- Ausstellungskarte 1 -->
<table>
	<tr>
		<td>Ausstellungskarte 1</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<!-- Ausstellungskarte 2 -->
<table>
	<tr>
		<td>Ausstellungskarte 2</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<!-- Ausstellungskarte 3 -->
<table>
	<tr>
		<td>Ausstellungskarte 3</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<!-- Ausstellungskarte 4 -->
<table>
	<tr>
		<td>Ausstellungskarte 4</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<form action=function_takeexpositioncard.php method=POST>
	<input type=submit value=Ausstellungskarte1 name=takeexpositioncard_one />
	<input type=submit value=Ausstellungskarte2 name=takeexpositioncard_two />
	<input type=submit value=Ausstellungskarte3 name=takeexpositioncard_three />
	<input type=submit value=Ausstellungskarte3 name=takeexpositioncard_three />
</form>
