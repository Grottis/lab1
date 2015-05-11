<!DOCTYPE html>
<html lang = "sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		
		<meta charset="utf-8">
		<title>Lämna en kommentar!</title>
	</head>
	<body>
	<?php 
		$user = "lab";
		$host = "localhost";
		$pass = "fcFUmm5uyM2Fx2un";
		$db = "lab1";
		$query = "SELECT * FROM comments";
		$mysqli = new mysqli($host, $user, $pass, $db);
		$error = $mysqli->connect_error;
		if ($error) {
			$code  = $mysqli->connect_errno;
			die("Error: ($code) $error");
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$namn=$_POST["namn"];
			$email = $_POST["email"];
			$kommentar = $_POST["kommentar"];
			
			echo $namn. " ".$email." ".$kommentar;
			$queryInsert = "INSERT INTO comments (namn,mail,kommentar) VALUES('$namn','$email','$kommentar')";
			$result = $mysqli->query($queryInsert);
			
		}
		
		$result = $mysqli->query($query);
		

	?>
	<div id="main">
		<div id="header">
			<img src ="assets/img/logo.png" alt="Lämna en kommentar">
			<div id="nav">
				<ul>
					<li><a href="nyaste.php">Nyaste först</a></li>
					<li><a href="aldsta.php">Äldsta först</a></li>
					<li><a href="#formen">Skriv ett inlägg</a></li>
					<li><a href="signin.php" id="signin">Logga in</a></li>
				</ul>
				
			</div>
		</div>
		<div id="commentsection">
			<?php
				while($row = $result->fetch_assoc()){
					
				?>
			
			
			<div class="comment" id="comment<?php echo $row["id"];?>">
				<div class="commentheader">
					<ul>
						<li>Namn: <?php echo $row["namn"];?></li>
						<li>Email:<?php echo $row["mail"];?></li>
						<li>Tid: 21:40</li>
					</ul>
				</div>
				
				<p id="commentP<?php echo $row["id"];?>">
					<?php echo $row["kommentar"];?>
				</p>
				
				<div class="commentfooter">
					<ul>
						<li><a href="">Svara</a></li>
						<li><a href="#" id="link<?php echo $row["id"];?>">Dölj</a></li>
					</ul>
				</div>
			</div>
				<?php }?>
			<div class="commentreply">
				<div class="commentheader">
					<ul>
						<li>Namn: Thyrfing</li>
						<li>Email:thyrfing@vansinne.se</li>
						<li>Tid: 21:45</li>
					</ul>
				</div>
				<p>
Länge nog har era maskätna huvuden vilat på era veka axlar
En längtande känsla sprider sig I mina nävar och lustan brinner
Klinga stolt när ben möter stål, klinga stolt när sårsvetten droppar
Länge nog har du väntat på att skilja maskätna huvuden från veka axlar

Djävlar anamma
Svält och bedrövelse
Pest och förintelse
Död och förbannelse

Inga tårar skall era förvridna, blödadne, brutna kroppar väta
Ingen älskarinna, slaäkt eller frände vid era lik skall sörja
Ingen hjältars sal, ingen himmelsk fröjd när makter (na) (era) öden utmäta
Blott spott och spe era eftermälen färga

Era gravar är passande att smutsa med mitt avskräde
Era minnen är mina att bespotta med hat och hån
Inga goda ord om de döda minner, inga ljusa minnen omtalas
I mitt vansinne fann ni livets ruttna slut</p>
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
			<form name="formular"  method = "post" action="index.php" onSubmit = "return validateForm()">
				
					<label for="namn">Ditt namn:</label>
					<input type="text" id="namn" name="namn" placeholder ="Ditt namn..."></input>
				
				
					<label for="email">Din e-post:</label>
					<input type="text" id="email" name="email" placeholder="Din e-post adress.."></input>
				
				
					<label for="kommentar" id="lblKommentar">Din kommentar</label>
					<textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar.."></textarea>
				
				
				<button type="submit" id="skicka">Skicka</button>
				
			</form>
			</div>
			<div id="footer">
				<p>Tell your friends to comment too!</p>
			</div>
		</div>
	<script src="assets/js/main.js"></script>
	</body>
</html>