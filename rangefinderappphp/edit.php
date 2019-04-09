<?php

/* select data from one row in a database and display them in editable fields */

/* receive a record id*/
//myapp.com/edit.php?id=5
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
	<h1>Edit Account</h1>
	<form action="confirm-update.php" method="POST">
		<p>User ID: <?php echo($row["user_id"]); ?></p>
		<input type="hidden" value="<?php echo($row["user_id"]); ?>" name="user_id"/>
		<p>First Name: <input type='text' name='firstName' value="<?php echo($row["fname"]); ?>"/></p>
		<p>Last Name: <input type='text' name='lastName' value="<?php echo($row["lname"]); ?>"/></p>
		<p>Address: <input type='text' name='address' value="<?php echo($row["address"]); ?>"/></p>
		<p>ZIP Code: <input type='text' name='postal_code' value="<?php echo($row["postal_code"]); ?>"/></p>
		<p>E-mail: <input type='email' name='email' value="<?php echo($row["email"]); ?>"/></p>
		<p>Phone Number: <input type='tel' name='phone' pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo($row["phone"]); ?>"/></p>
		<p>Password: <input type='password' required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password" value="<?php echo($row["password"]); ?>"/></p>
		<p>Confirm Password: <input type='password' required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name='password2' value="<?php echo($row["password2"]); ?>"/></p>
		<input id="registerBtn" type='submit' />
	</form>

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
