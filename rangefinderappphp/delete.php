<?php

	//confirm delete record
	$user_id = $_GET['user_id'];

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_RANGE";
	$dbpassword = "0+BqNh-giRnw";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	$stmt = $pdo->prepare("SELECT * FROM `users` WHERE user_id = $user_id");

	$stmt->execute();

	$row = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Range Finder - Delete Account</title>
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
				<li class=""><a href="rentsomething.php">Rent Something</a></li>
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
	<div class="bodyContent">
		<h1>Delete Account</h1>
		<h2>Are you sure you want to delete this record?</h2>
		<p>User ID: <?php echo($row["user_id"]); ?></p>
		<p>First Name: <?php echo($row["fname"]); ?></p>
		<p>Last Name: <?php echo($row["lname"]); ?></p>
		<p>Address: <?php echo($row["address"]); ?></p>
		<p>ZIP code: <?php echo($row["postal_code"]); ?></p>
		<p>Phone Number: <?php echo($row["phone"]); ?></p>
		<p>Email: <?php echo($row["email"]); ?></p>
		<p>Password: <?php echo($row["password"]); ?></p>
		<p>Confirm password: <?php echo($row["password2"]); ?></p>
		<?php //interface for confirm or cancel ?>
		<form action="confirm-delete.php" method="POST">
			<input type="hidden" value="<?php echo($row["user_id"]); ?>" name="user_id"/>
			<input type="submit" value="Confirm"/>
		</form>
	</div>
</body>
<!-- FOOTER GOES HERE -->
<footer>
</footer>
</html>
