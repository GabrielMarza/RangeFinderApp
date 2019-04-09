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
