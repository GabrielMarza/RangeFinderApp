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
<head>
	<title>Range Finder - Delete Account</title>
</head>
<body>
	<div class="bodyContent">

		<div class="flex-center flex-column">
			<h1 class="price" style="margin-top: 5%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Delete Account</h1>
			<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em;">Are you sure you want to delete this record?</h2>
		</div>
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
			<button class="btn btn-danger btn-lg" type="submit" name="submit" value="Confirm" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
				<h3><a href="edit.php?id=<?php echo($row["user_id"]); ?>">Confirm</a></h3>
			</button>
		</form>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
