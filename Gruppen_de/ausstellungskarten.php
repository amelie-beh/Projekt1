<!--
	- - - - - - - - - - - - - - - - - - 
	- - - VII. Ausstellungskarten - - - 
	- - - - - - - - - - - - - - - - - - 
	-28- 3 Tabellen f�r Ausstellungskarten 4x3 (Kartennummer, Anzeige Stadt, Dauer und Beschreibung)
	-64- Schaltfl�che (Ausstellungskarte 1 nehmen)
	-65- Schaltfl�che (Ausstellungskarte 2 nehmen)
	-66- Schaltfl�che (Ausstellungskarte 3 nehmen)
	-67- Schaltfl�che (Ausstellungskarte 4 nehmen)
-->

<!-- Ausstellungskarte 1 -->
<table>
	<tr>
		<td>Ausstellungskarte 1</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<!-- Ausstellungskarte 2 -->
<table>
	<tr>
		<td>Ausstellungskarte 2</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<!-- Ausstellungskarte 3 -->
<table>
	<tr>
		<td>Ausstellungskarte 3</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<!-- Ausstellungskarte 4 -->
<table>
	<tr>
		<td>Ausstellungskarte 4</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<form action=function_takeexpositioncard.php method=POST>
	<input type=submit value=Ausstellungskarte1 name=takeexpositioncard_one />
	<input type=submit value=Ausstellungskarte2 name=takeexpositioncard_two />
	<input type=submit value=Ausstellungskarte3 name=takeexpositioncard_three />
	<input type=submit value=Ausstellungskarte3 name=takeexpositioncard_three />
</form>
