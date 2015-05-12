<?php
	session_start();

?>
<!DOCTYPE html>
<html lang = "sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		<meta charset="utf-8">
		<title>Lämna en kommentar!</title>
	</head>
	<body>
	<?php 
	
		require "../../../topsecret/topsecret.php";
		$mysqli = new mysqli($host, $user, $pass, $db);
		$error = $mysqli->connect_error;
		if ($error) {
			$code  = $mysqli->connect_errno;
			die("Error: ($code) $error");
		}
		if(!empty($_POST["register"]))
		{
			$email = $mysqli->real_escape_string($_POST["regmail"]);
			$password = password_hash($_POST["regpassword"],PASSWORD_DEFAULT);
			$username = $mysqli->real_escape_string($_POST["username"]);
			
			$query = "INSERT INTO users(email,pass,username) VALUES('$email','$password','$username')";
			
			if($mysqli->query($query)===true)
			{
				echo "hurra";
				$_SESSION["username"] = 5;
			}
			else
				echo "no!";
		}
		if(!empty($_POST["login"]))
		{	
			echo "Nu finns den alltså!";
			$mail = $mysqli->real_escape_string($_POST["signinmail"]);
			
			$query = "SELECT pass,userid from users WHERE email ='$mail'";
			
			$row = $mysqli->query($query)->fetch_assoc();
			
			if(password_verify($_POST["password"],$row["pass"]))
			{
				
				$_SESSION["username"] = $row["userid"];
				
			}
			else echo "fel användarnamn/lösenord";
		}
		if (!empty( $_POST["newcomment"]))
		{
			echo "new comment";
			$namn = Trim($mysqli->real_escape_string($_POST["namn"]));
			$email = Trim($mysqli->real_escape_string($_POST["email"]));
			$kommentar = Trim($mysqli->real_escape_string($_POST["kommentar"]));
			$reply = Trim($mysqli->real_escape_string($_POST["reply"]));
			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				echo "fel e-post";
			}
			else if ( $_POST["namn"] = "" || $_POST["email"] == "" || $_POST["kommentar"] ==""){
				echo "Fel namn/kommentar";
			}
			else{
				if(empty($reply)){
					//need to change the database structure - sets what comment to reply to
					$reply = 0;
				}
				$queryInsert = "INSERT INTO comments (namn,mail,kommentar,reply) VALUES('$namn','$email','$kommentar','$reply')";
				$mysqli->query($queryInsert);
			}
			
		}
		
		$query = "SELECT * FROM comments";
		$result = $mysqli->query($query);
		$mysqli->close(); 
		
		
	?>
	<div id="main">
		<div id="header">
			<img src ="assets/img/logo.png" alt="Lämna en kommentar">
			<div id="nav">
				<ul>
					<li><a href="nyaste.php">Nyaste först</a></li>
					<li><a href="aldsta.php">Äldsta först</a></li>
					<li><a href="#formen">Skriv ett inlägg</a></li>
					<li><span id="signin"><?php if(isset($_SESSION["username"])){ echo "<a href='logout.php'>Logga ut</a>";} else echo "Logga in";?></span><div id="login">
					<form action="index.php" method ="post">
					<label for ="signinmail">E-mail</label>
					<input type="email" name="signinmail">
					<label for ="password">Password</label>
					<input type="password" name="password">
					<input type="hidden" name="login" value="true">
					<input type="submit" value="Logga in">
					</form>
					<span class="hidelink" id="registerLink" >Registrera dig</span>
				</div></li>
				</ul>
				<!--// <div id="login">
					<form action="index.php" method ="post">
					<label for ="signinmail">E-mail</label>
					<input type="email" name="signinmail">
					<label for ="password">Password</label>
					<input type="password" name="password">
					<input type="hidden" name="login" value="true">
					<input type="submit" value="Logga in">
					</form>
					<span class="hidelink" id="registerLink" >Registrera dig</span>
				</div>-->
				<div id="register">
					<h3>Registrera dig!</h3>
					<form action="index.php" method="post">
					<label for "regmail">E-post</label>
					<input type="email" name="regmail" required>
					<label for ="regpassword">Lösenord</label>
					<input type="password" name="regpassword" required>
					<label for ="username">Önskat användarnamn</label>
					<input type="text" name="username">
					<input type="hidden" name="register" value="true">
					<input type="submit" value="Registrera dig">
					</form>
				</div>
			</div>
		</div>
		<div id="commentsection">
			<?php
				while($row = $result->fetch_assoc()):
				
				if($row["reply"]==0)
				{
					$comment = "comment";
				}
				else{ $comment = "commentreply";}
				?>
				<div class="<?=$comment?>" id="comment<?php echo $row["id"];?>">
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
							<li><span class="hidelink" id="reply<?=$row["id"]?>">Svara</span></li>
							<li><span class="hidelink" id="showOrHide<?=$row["id"]?>">Dölj</span></li>
						</ul>
					</div>
				</div>
		<?php endwhile;?>
			
		</div>	
		<?php
			if(isset($_SESSION["username"]))
			{?>
		<div id="formen">
			<h3>Lämna gärna en egen kommentar!</h3>
			<p id="wronginput">Ett eller flera fält är inte korrekt ifyllda</p>
			<form name="formular"  method = "post" action="index.php">
				
					<label for="namn">Ditt namn:</label>
					<input type="text" id="namn" name="namn" placeholder ="Ditt namn...">
				
				
					<label for="email">Din e-post:</label>
					<input type="email" id="email" name="email" placeholder="Din e-post adress..">
				
				
					<label for="kommentar" id="lblKommentar">Din kommentar</label>
					<textarea id="kommentar" name="kommentar" placeholder="Skriv din kommentar.."></textarea>
					<input type="hidden" name="reply" id="reply">
					<input type="hidden" name="newcomment" value="newcomment">
				<input type="submit" id="skicka" value="Skicka">
				
			</form>
			</div>
			<?php
			}
			?>
			<div id="footer">
				<p>Tell your friends to comment too!</p>
			</div>
		</div>
	<script src="assets/js/main.js"></script>
	
	</body>
</html>