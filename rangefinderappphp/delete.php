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
<?php
include 'head-n-header.php';
?>
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
