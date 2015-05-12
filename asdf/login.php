
<!DOCTYPE html>
<html lang="sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		
		<meta charset="utf-8">
		<title>Lämna en kommentar! - Login</title>
	</head>
	<body>
	<?php
		require "../../../topsecret/topsecret.php";
		if(!empty($_POST["signinmail"]))
		{
			$mysqli = new mysqli($host, $user, $pass, $db);
			$error = $mysqli->connect_error;
			if ($error) {
				$code  = $mysqli->connect_errno;
				die("Error: ($code) $error");
			}
			$mail = $mysqli->real_escape_string($_POST["signinmail"]);
			
			$query = "SELECT pass,userid from users WHERE email ='$mail'";
			
			$row = $mysqli->query($query)->fetch_assoc();
			echo $row["userid"];
			if(password_verify($_POST["password"],$row["pass"]))
			{
				session_start();
				$_SESSION["username"] = $row["userid"];
				
			?>
			<h1>Inloggad</h1>
			<a href="ogga.php" style="color:black;">Vidare</a>
			<?php
			echo $_SESSION["username"];
			}
			else
				echo "boo";
			
		}
		else echo "Du har inte angivit något";
	?>
	</body>
</html>