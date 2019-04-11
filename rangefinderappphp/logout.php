<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- <title>Range Finder - Home</title> -->
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
	<script type="text/javascript"></script>
	<style>
	body{
		font-size:62.5%;
		font-family:"Microsoft YaHei",Arial;
		overflow-x:hidden; overflow-y:auto;
		background-color:#ffffff;
	}
	.viewport{
		max-width:844px;
		min-width:300px;
		margin:0 auto;
	}
	.sidepanel  {
		width: 0;
		position: fixed;
		z-index: 1;
		height: 100%;
		top: 0;
		left: 0;
		background-color: #374371;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
	}
	.sidepanel a {
		padding: 8px 8px 8px 32px;
		font-size: 19px;
		color: white;
		display: block;
		transition: 0.3s;
	}
	.sidepanel .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
	}
	.openbtn {
		color: white;
		font-size: 3.5em;
		margin-left:-8em;
		margin-top: -1.5%;
		background-color: #374371;
		border: none;
	}
	hr{
		background-color: white;
		margin-left: 10%;
		margin-right: 10%;
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
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<button class="openbtn" onclick="openNav()">☰</button>
			<?php if ($_SESSION['logged-in'] == true) { ?>
				<button class="openbtn" onclick="openNav()">☰</button>
				<a href="index.php">Home</a>
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
				<?php
			}else{ ?>
				<button class="openbtn" onclick="openNav()">☰</button>
				<a href="index.php">Home</a>
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			<?php } ?>
		</div>
		<button class="openbtn row align-items-start" onclick="openNav()">☰</button>
		<a class="openbtn" href="index.php"><img src="img/home.png"></a>
		<script>
		function openNav() {
			document.getElementById("mySidepanel").style.width = "250px";
		}
		function closeNav() {
			document.getElementById("mySidepanel").style.width = "0";
		}
		</script>
	</nav>
</header>

<head>
	<title>Range Finder - Logged Out</title>
</head>
<body>

	<div class="flex-center flex-column">
		<h1 class="price" style="margin-top: 15%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">You've logged out</h1>
		<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; "><a href="index.php">Back to home page.</a></h2>
	</div>

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
<!-- FOOTER GOES HERE -->
<footer>
</footer>
</html>
