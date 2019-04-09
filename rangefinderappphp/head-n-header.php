<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Range Finder - Home</title>
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
</head>
<!-- HEADER GOES HERE -->
<header>
	<!--Navbar-->
	<nav class="navbar navbar-dark  indigo darken-2">
		<!-- Navbar brand -->
		<a class="navbar-brand" href="#"></a>
		<div id="mySidepanel" class="sidepanel">
			<a href="index.php">Home</a>
			<?php if ($_SESSION['logged-in'] == true) { ?>
				<button class="openbtn" onclick="openNav()">☰</button>
				<a href="rentsomething.php">Rent Something</a>
				<a href="rentout.php">Rent your own tools out</a>
				<a href="dashboard.php">Dashboard</a>
				<a href="logout.php">logout</a>
				<?php
			}else{ ?>
				<button class="openbtn" onclick="openNav()">☰</button>
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			<?php } ?>
		</div>
		<button class="openbtn" onclick="openNav()">☰</button>
		<a class="openbtn" href="index.php"><img src="img/home.png"></a>
	</nav>
</header>
