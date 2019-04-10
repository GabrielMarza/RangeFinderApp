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
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Dashboard</title>
</head>
<body>
	<h1 class="price" style="margin-top: 5%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Your Dashboard</h1>
	<section id="person-records" style="font-size: 3em; padding-top: 10px; padding-left: 1.2em; padding-right: 1.2em;">
			<?php
			//show records (process results)
			while($row = $stmt->fetch()) {
				//echo($row["email"]); //or $row[0];
				?><div>
					<?php echo($row["id"]); ?>
					<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
						<h3><a style="color: white; font-weight: bold;" href="edit.php?id=<?php echo($row["user_id"]); ?>">Edit</a></h3>
					</button>
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
<?php
include 'javascript-n-footer.php';
?>
