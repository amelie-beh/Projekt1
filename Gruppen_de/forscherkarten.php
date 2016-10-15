<!--
	- - - - - - - - - - - - - - - -
	- - - VI. Forscherkarten - - - 
	- - - - - - - - - - - - - - - -
	-23- 4x Tabellen / Forscherkarten 3x3 (Anzeige Stadt, Dauer und Beschreibung)
	-15- Formular / Action ruft PHP Funktion auf
	-03- 4x Input / Submit (Forscherkarte 1 nehmen, Forscherkarte 2 nehmen, Forscherkarte 3 nehmen, Forscherkarte 4 nehmen)
	
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
