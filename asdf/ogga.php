<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("location:index.php");
		die();
		echo "Get out!";
	}
	else{
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<link rel="stylesheet" href="assets/css/main.css">
		
		<meta charset="utf-8">
		<title>Lämna en kommentar! - Login</title>
	</head>
	<body>
	<h1>Inloggad ja</h1>
	<?php 
		echo "<h3>";
		echo $_SESSION["username"];
		echo "</h3>";
	}
		?>
		<a href="logout.php" style="color:black;">Logout</a>
	
	</body>
</html>