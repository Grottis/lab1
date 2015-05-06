<!DOCTYPE html>
<html lang = "sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		
		<meta charset="utf-8">
		<title>Lämna en kommentar!</title>
	</head>
	<body>
	<div id="main">
		<img src ="assets/img/logo.png">
		<p id="signin">Sign in!</p>
		<div id="commentsection">
			<div class="comment" id="comment1">
				<div class="commentheader">
					<ul>
						<li>Namn: Hasse Hassesson</li>
						<li>Email:hasse.hasseson@hasse.se</li>
						<li>Tid: 21:42</li>
					</ul>
				</div>
				
				<p id="commentP1">Det här är min kommentar. Den handlar om bananer i pyjamas och jag tycker det är roligt. Nu måste jag skriva en massa text bara för att jag tänkte att jag skulle se vad som händer om jag fyller upp den här rutan tillräckligt mycket. Jag behöver visst skriva några rader till, det vore ju katastrof om den gick över och hur skall jag lösa det dådådådå? Genom att ta bort höjden såklart. Bara skriva ännu mer här nu undrar vad som kommer att hända då, det är ganska spännande att sitta här och bara dona. Men man blir ju lite less när det inte riktigt vill fungera som jag vill. Jag måste ju för tusan gå vidare någon gång. Kan fan inte sitta här hela dagen!Jag borde väl börja skriva en bok istället. IDag var jag på eko hela dagen tills jag fick ont i magen! Satan i gatan!! Och vad fasen händer nudå? Jaha, jag var tvungen att skriva ytterligare lite grann. hehe. Det är inte så lätt det här inte!FAAAN! Det där var ju ett nice trick. Att sätta margin på p:et till 50px borde lösa alla problem. Men men Vad händer om vi sänker den till 30px. Kanske fungerar det ändå. Vem vet?!</p>
				
				<div class="commentfooter">
					<ul>
						<li><a href="">Svara</a></li>
						<li><a href="#" id="link1">Dölj</a></li>
					</ul>
				</div>
			</div>
			<div class="comment">
				<div class="commentheader">
					<ul>
						<li>Namn: Hasse Hassesson</li>
						<li>Email:hasse.hasseson@hasse.se</li>
						<li>Tid: 21:42</li>
					</ul>
				</div>
				<p>Det här är min kommentar. Den handlar om bananer i pyjamas och jag tycker det är roligt. Nu måste jag skriva en massa text bara för att jag tänkte att jag skulle se vad som händer om jag fyller upp den här rutan tillräckligt mycket. Jag behöver visst skriva några rader till, det vore ju katastrof om den gick över och hur skall jag lösa det dådådådå? Genom att ta bort höjden såklart. Bara skriva ännu mer här nu undrar vad som kommer att hända då, det är ganska spännande att sitta här och bara dona. Men man blir ju lite less när det inte riktigt vill fungera som jag vill. Jag måste ju för tusan gå vidare någon gång. Kan fan inte sitta här hela dagen!Jag borde väl börja skriva en bok istället. IDag var jag på eko hela dagen tills jag fick ont i magen! Satan i gatan!! Och vad fasen händer nudå? Jaha, jag var tvungen att skriva ytterligare lite grann. hehe. Det är inte så lätt det här inte!FAAAN! Det där var ju ett nice trick. Att sätta margin på p:et till 50px borde lösa alla problem. Men men Vad händer om vi sänker den till 30px. Kanske fungerar det ändå. Vem vet?!</p>
				<div class="commentfooter">
					<ul>
						<li><a href="">Svara</a></li>
						<li><a href="">Dölj</a></li>
					</ul>
				</div>
			</div>
			<div class="comment">
				<div class="commentheader">
					<ul>
						<li>Namn: Hasse Hassesson</li>
						<li>Email:hasse.hasseson@hasse.se</li>
						<li>Tid: 21:42</li>
					</ul>
				</div>
				<p>Det här är min kommentar. Den handlar om bananer i pyjamas och jag tycker det är roligt. Nu måste jag skriva en massa text bara för att jag tänkte att jag skulle se vad som händer om jag fyller upp den här rutan tillräckligt mycket. Jag behöver visst skriva några rader till, det vore ju katastrof om den gick över och hur skall jag lösa det dådådådå? Genom att ta bort höjden såklart. Bara skriva ännu mer här nu undrar vad som kommer att hända då, det är ganska spännande att sitta här och bara dona. Men man blir ju lite less när det inte riktigt vill fungera som jag vill. Jag måste ju för tusan gå vidare någon gång. Kan fan inte sitta här hela dagen!Jag borde väl börja skriva en bok istället. IDag var jag på eko hela dagen tills jag fick ont i magen! Satan i gatan!! Och vad fasen händer nudå? Jaha, jag var tvungen att skriva ytterligare lite grann. hehe. Det är inte så lätt det här inte!FAAAN! Det där var ju ett nice trick. Att sätta margin på p:et till 50px borde lösa alla problem. Men men Vad händer om vi sänker den till 30px. Kanske fungerar det ändå. Vem vet?!</p>
				<div class="commentfooter">
					<ul>
						<li><a href="">Svara</a></li>
						<li><a href="">Dölj</a></li>
					</ul>
				</div>
			</div>
		</div>	
		<div id="formen">
		<h3>Lämna gärna en egen kommentar!</h3>
		<p id="wronginput">Ett eller flera fält är inte korrekt ifyllda</p>
		<form name="formular"  onSubmit = "return validateForm()">
			
				<label for="namn">Ditt namn:</label>
				<input type="text" id="namn" name="namn" placeholder ="Ditt namn..."></input>
			
			
				<label for="email">Din e-post:</label>
				<input type="text" id="email" name="email" placeholder="Din e-post adress.."></input>
			
			
				<label for="kommentar">Din kommentar</label>
				<textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar.."></textarea>
			
			
			<button type="submit" id="skicka">Skicka</button>
			
		</form>
		</div>
	</div>
	<script src="assets/js/main.js"></script>
	</body>
</html>