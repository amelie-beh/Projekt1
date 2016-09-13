<!doctype html>
<html lang=de>
	<head>
		<meta charset=utf-8>
			<title></title>
	</head>
		<body>
			<main>
			<!--
				- - - - - - - - - - - - - - - - - - 
				- - - III. Optionen beim Start - - -
				- - - - - - - - - - - - - - - - - -
				-74- Absatz
				-04- Radio Button (Anzahl Gegner)
				-74- Absatz
				-04- Radio Button (Anzahl Gegner)
				-74- Absatz
				-04- Radio Button (Anzahl Gegner)
				-74- Absatz
				-06- Schaltfläche ("Spiel starten", Link zu view_spielfeld)
				-74- Absatz
				-05- Link (Anzeige Spielregeln, Link zu view_spielregeln)
			-->
				<form>
					<p>Mit wie vielen Mitspielern möchtest du spielen?</p>
						<p><input type="radio" id="rb1" name="Gegner" value="1"><label for="rb1"> 1</label></p>
						<p><input type="radio" id="rb2" name="Gegner" value="2"><label for="rb2"> 2</label></p>
						<p><input type="radio" id="rb2" name="Gegner" value="3"><label for="rb3"> 3</label></p>
				</form>
				
				<!-- Spieleranzahl je nach Auswahl verändern -->
				<form action=view_spielfeld.html target=_self>
						<p><input type=submit value=Starten></p>
				</form>
						<p><a href=view_spielregeln.html>Spielregeln</a></p>
			</main>
			
			<?php include ("Gruppen_de/footer.html"); ?>
				
		</body>
</html>