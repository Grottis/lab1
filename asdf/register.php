
<!DOCTYPE html>
<html lang = "sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		
		<meta charset="utf-8">
		<title>Lämna en kommentar! - Register</title>
	</head>
	<body>
	<?php
		require "../../../topsecret/topsecret.php";
		if(!empty($_POST["regmail"]))
		{
			$mysqli = new mysqli($host, $user, $pass, $db);
			$error = $mysqli->connect_error;
			if ($error) {
				$code  = $mysqli->connect_errno;
				die("Error: ($code) $error");
			}
			
			$email = $mysqli->real_escape_string($_POST["regmail"]);
			$password = password_hash($_POST["regpassword"],PASSWORD_DEFAULT);
			$username = $mysqli->real_escape_string($_POST["username"]);
			
			$query = "INSERT INTO users(email,pass,username) VALUES('$email','$password','$username')";
			
			if($mysqli->query($query)===true)
			echo "hurra";
			else
				echo "no!";
		}
		else echo "Du har inte angivit något";
	?>
	</body>
</html>