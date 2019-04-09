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
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/my-custom.css">
	<style type="text/css"></style>
	<style>
	body{
		font-size:62.5%;
		font-family:"Microsoft YaHei",Arial;
		overflow-x:hidden; overflow-y:auto;
	}
	.viewport{
		max-width:844px;
		min-width:300px;
		margin:0 auto;
	}
	</style>

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
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
