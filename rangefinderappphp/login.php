<?php
	session_start();

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_IMM";
	$dbpassword = "xcttqM8g8Fu2KCH";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Range Finder - Login</title>
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
		<div id="login">
			<h1>Login Page</h1>
			<h2>Have an account? <b>Login here!</b></h2>
			<form method='post' action='process-login.php'>
				<fieldset>
					<p>E-mail: </p><input type="email" name="email" placeholder="example@email.com" required="" />
					<p>Password: </p><input type="password" name="password" placeholder="********" required="" />
					<p>Submit! </p><input id="loginBtn" type="submit" name="submit" />
				</fieldset>
			</form>
			<a href="register.php">Don't have an account? Register with us today.</a>
		</div>
	</body>
	<!-- FOOTER GOES HERE -->
	<footer>
	</footer>
</html>
