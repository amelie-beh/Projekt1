<!--
	- - - - - - - - - - - - - - - -
	- - - VI. Forscherkarten - - - 
	- - - - - - - - - - - - - - - -
	-23- 4 Tabellen f�r Forscherkarten 4x3 (Nummer Forscherkarte, Anzeige Stadt, Dauer und Beschreibung)
	-24- Schaltfl�che (Forscherkarte 1 nehmen)
	-25- Schaltfl�che (Forscherkarte 2 nehmen)
	-26- Schaltfl�che (Forscherkarte 3 nehmen)
	-27- Schaltfl�che (Forscherkarte 4 nehmen)
-->
<!-- Forscherkarte 1 -->
<table>
	<tr>
		<td>Forscherkarte 1</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<!-- Forscherkarte 2 -->
<table>
	<tr>
		<td>Forscherkarte 2</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<!-- Forscherkarte 3 -->
<table>
	<tr>
		<td>Forscherkarte 3</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<!-- Forscherkarte 4 -->
<table>
	<tr>
		<td>Forscherkarte 4</td>
		<td><!-- Anzeige Stadt, �bernahme aus DB --></td>
		<td><!--Anzeige Dauer, �bernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, �bernahme aus DB --></td>
	</tr>
</table>

<form action=function_takeresearchcard.php method=POST>
	<input type=submit value=Forscherkarte1 name=takeresearchcard_one />
	<input type=submit value=Forscherkarte2 name=takeresearchcard_two />
	<input type=submit value=Forscherkarte3 name=takeresearchcard_three />
	<input type=submit value=Forscherkarte4 name=takeresearchcard_four />
</form>
