<?php
	session_start();

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_RANGE";
	$dbpassword = "0+BqNh-giRnw";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Range Finder - Account Created</title>
		<link rel="stylesheet" href="/css/reset.css">
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<!-- HEADER GOES HERE -->
	<header>
	</header>
	<body>
		<div class="">
			<h1>Thank You</h1>
			<h2>Account Created!</h2>
			<div id="">
				<h1>Thank you for creating an account with us!</h1>
				<h2>You can now use our services freely!</h2>
				<a href="dashboard.php"><img id="" src ="img/logo.png" /></a>
				<a href="dashboard.php"><p>Go to your dashboard and view your settings.</p></a>
			</div>
		</div>
	</body>
</html>
