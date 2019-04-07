<?php

session_start();
echo "HELLO!";

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
} else {

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_RANGE";
	$dbpassword = "0+BqNh-giRnw";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	$stmt = $pdo->prepare("SELECT * FROM `users`");

	$stmt->execute();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Range Finder - User Dashboard</title>
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
	<h1>Your Dashboard</h1>
	<section id="person-records">
		<h2>Person records</h2>

		<?php
		//show records (process results)
		while($row = $stmt->fetch()) {
			//echo($row["email"]); //or $row[0];
			?><div>
				Id: <?php echo($row["id"]); ?>
				<span><a href="edit.php?id=<?php echo($row["user_id"]); ?>">Edit</a></span>
				<span><a href="delete.php?id=<?php echo($row["user_id"]); ?>">Delete</a></span>
				<p>First name: <?php echo($row["fname"]); ?></p>
				<p>last name: <?php echo($row["lname"]); ?></p>
				<p>Address: <?php echo($row["address"]); ?></p>
				<p>ZIP code: <?php echo($row["postal_code"]); ?></p>
				<p>Phone Number: <?php echo($row["phone"]); ?></p>
				<p>Email: <?php echo($row["email"]); ?></p>
				<p>Password: <?php echo($row["Password"]); ?></p>
				<br/>
				<br/>
			</div>
		<?php }
		?>
	</section>
</body>
<!-- FOOTER GOES HERE -->
<footer>
</footer>
</html>
