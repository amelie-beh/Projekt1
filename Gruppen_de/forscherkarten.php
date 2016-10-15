<!--
	- - - - - - - - - - - - - - - -
	- - - VI. Forscherkarten - - - 
	- - - - - - - - - - - - - - - -
	-23- 4 Tabellen für Forscherkarten 4x3 (Nummer Forscherkarte, Anzeige Stadt, Dauer und Beschreibung)
	-24- Schaltfläche (Forscherkarte 1 nehmen)
	-25- Schaltfläche (Forscherkarte 2 nehmen)
	-26- Schaltfläche (Forscherkarte 3 nehmen)
	-27- Schaltfläche (Forscherkarte 4 nehmen)
-->
<!-- Forscherkarte 1 -->
<table>
	<tr>
		<td>Forscherkarte 1</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<!-- Forscherkarte 2 -->
<table>
	<tr>
		<td>Forscherkarte 2</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<!-- Forscherkarte 3 -->
<table>
	<tr>
		<td>Forscherkarte 3</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<!-- Forscherkarte 4 -->
<table>
	<tr>
		<td>Forscherkarte 4</td>
		<td><!-- Anzeige Stadt, Übernahme aus DB --></td>
		<td><!--Anzeige Dauer, Übernahme aus DB --></td>
		<td><!--Anzeige Beschreibung, Übernahme aus DB --></td>
	</tr>
</table>

<form action=function_takeresearchcard.php method=POST>
	<input type=submit value=Forscherkarte1 name=takeresearchcard_one />
	<input type=submit value=Forscherkarte2 name=takeresearchcard_two />
	<input type=submit value=Forscherkarte3 name=takeresearchcard_three />
	<input type=submit value=Forscherkarte4 name=takeresearchcard_four />
</form>
