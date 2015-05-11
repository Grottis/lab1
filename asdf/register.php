
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
			echo $username;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $password;
			echo "<br>";
			$query = "INSERT INTO users(email,pass,username) VALUES('$email','$password','$username')";
			echo $query;
			$result = $mysqli->query($query);
			echo $result;
		}
		else echo "Du har inte angivit något";
	?>
	</body>
</html>