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
<head>
	<title>Range Finder - Edit Account</title>
</head>
<body>
	<div class="flex-center flex-column">
		<h1 class="price" style="margin-top: 5%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Edit Account</h1>
	</div>
	<div class="container">
		<form action="confirm-update.php" method="POST">
			<p><?php echo($row["user_id"]); ?></p>
			<input type="hidden" value="<?php echo($row["user_id"]); ?>" name="user_id" style="margin-top: 25px; width:100%;" />
			<input type='text' name='firstName' placeholder="First Name" value="<?php echo($row["fname"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='text' name='lastName' placeholder="Last Name" value="<?php echo($row["lname"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='text' name='address' placeholder="Address" value="<?php echo($row["address"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='text' name='postal_code' placeholder="ZIP Code" value="<?php echo($row["postal_code"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='email' name='email' placeholder="E-mail" value="<?php echo($row["email"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='tel' name='phone' placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo($row["phone"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='password' placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password" value="<?php echo($row["password"]); ?>" style="margin-top: 25px; width:100%;" />
			<input type='password' placeholder="Confirm Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name='password2' value="<?php echo($row["password2"]); ?>" style="margin-top: 25px; width:100%;" />
			<button class="btn btn-warning btn-lg" id="registerBtn" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
				<b style="font-size: 1.5em;">Confirm Edit</b>
			</button>
		</form>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
