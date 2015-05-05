<!DOCTYPE html>
<html lang = "sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		<!--<script src="javascripts/main.js">-->
		<meta charset="utf-8">
		<title>Lämna en kommentar!</title>
	</head>
	<body>
	<div id="main">
		<img src ="assets/img/logo.png">
		<p id="signin">Sign in!</p>
		<div id="commentsection">
			<div class="comment">
				<p class ="posterinfo"><span>Namn: Hasse </span><span>Email:hasse@hasse.se</span> <span>Tid: 21:42</span><p>
				<p>Det här är min kommentar. Den handlar om bananer i pyjamas och jag tycker det är roligt. Nu måste jag skriva en massa text bara för att jag tänkte att jag skulle se vad som händer om jag fyller upp den här rutan tillräckligt mycket. Jag behöver visst skriva några rader till, det vore ju katastrof om den gick över och hur skall jag lösa det dådådådå? Genom att ta bort höjden såklart. Bredden får vara fast tycker jag.</p>
				<div class="commentfoot">
					<a href="">Svara</a><a href="">Dölj</a>
				</div>
			</div>
			<div class="comment">
				<p class="posterinfo">Namn: Hans-Örjan Email:hasseowithpricks@hasse.se Tid: 21:45<p>
				<p>Det här är min kommentar, det du Hasse. Lite roligare färger kanske, svårt att läsa svart på grått. Kanske kopiera lite färger från andra sidor. Hehehehehe!</p>
				<div class="commentfoot">
					<a href="">Svara</a><a href="">Dölj</a>
				</div>
			</div>
		</div>
		<div id="formen">
		<form>
			
				<label for="namn">Ditt namn:</label>
				<input type="text" id="namn" placeholder ="Ditt namn..."></input>
			
			
				<label for="email">Din e-post:</label>
				<input type="text" id="email" placeholder="Din e-post adress.."></input>
			
			
				<label for="kommentar">Din kommentar</label>
				<textarea id="kommentar" placeholder="Skriv din kommentar.."></textarea>
			
			
			<button type="submit">Submit</button>
			
		</form>
		</div>
	</div>
	</body>
</html>