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
		<title>Range Finder - Register</title>
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
		<div id="register">
			<h1>Register Page</h1>
			<h2>Not yet a member? <b>Register here!</b></h2>
			<form method="POST" enctype="multipary/form-data" action="process-register.php">
				<fieldset>
					<p>First Name: </p><input type="text" name="fname" placeholder="Enter your first name." required="" value="" />
					<p>Last Name: </p><input type="text" name="lname" placeholder="Enter your last name." required="" value="" />
					<p>Address: </p><input type="text" name="address" placeholder="Enter your address." required="" value="" />
					<p>ZIP Code: </p><input type="text" name="postal_code" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" placeholder="L#L-#L#" required="" value="" />
					<p>E-mail: </p><input type="email" name="email" placeholder="contact@email.com" required="" value="" />
					<p>Phone Number: </p><input type="tel" name="phone" placeholder="123-456-7890." pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" value="" />
					<p>Password: </p><input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password" placeholder="********" />
					<p>Confirm Password: </p><input title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password2" placeholder="********" />
					<p>Submit! </p><input id="registerBtn" type="submit" name="submit" />
				</fieldset>
			</form>
			<a href="login.php">Have an account with us? Login over here.</a>
		</div>
	</body>
	<!-- FOOTER GOES HERE -->
	<footer>
	</footer>
</html>
