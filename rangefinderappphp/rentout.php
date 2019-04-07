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
		<title>Range Finder - Rent Out</title>
		<link rel="stylesheet" href="/css/reset.css">
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<!-- HEADER GOES HERE -->
	<header>
		<nav>
			<ul>
				<li class="dropdownBtn"><img id="" src="img/logo.png" /></li>
				<li class=""><a href="index.php">Home</a></li>
				<?php if ($_SESSION['logged-in'] == true) { ?>
					<li class=""><a href="rentlist.php">Rent Something</a></li>
					<li class=""><a href="rentout.php">Rent your own tools out</a></li>
					<li class=""><a href="dashboard.php">Dashboard</a></li>
					<li class=""><a href="logout.php">logout</a></li>
					<?php
				}else{ ?>
						<li class=""><a href="login.php">Login</a></li>
						<li class=""><a href="register.php">Register</a></li>
					<?php } ?>
			</ul>
		</nav>
	</header>
	<body>
		<h1>Rent your own tools out</h1>
		<p>Have any camera, or photography equipment you want to rent out?</p>
		<form method='post' action='process-rentout.php'>
			<fieldset>
				<!-- <p>1st Item: </p><input type="text" name="" required="" /> -->
				<p>1st Item Availability: </p><input type="checkbox" name="item01_avl" required="" />
				<!-- <p>2nd Item: </p><input type="text" name="" required="" /> -->
				<p>2nd Item Availability: </p><input type="checkbox" name="item02_avl" required="" />
				<!-- <p>3rd Item: </p><input type="text" name="" required="" /> -->
				<p>3rd Item Availability: </p><input type="checkbox" name="item03_avl" required="" />
				<p>Rent Out! </p><input id="" type="submit" name="submit" />
			</fieldset>
		</form>
	</body>
	<!-- FOOTER GOES HERE -->
	<footer>
	</footer>
</html>
