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
		<title>Range Finder - Rent List</title>
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
		<li class=""><a href="index.php"><img id="navLogo" src ="img/logo.png" /></a></li>
	</body>
	<!-- FOOTER GOES HERE -->
	<footer>
	</footer>
</html>
