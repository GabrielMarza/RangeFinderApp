<?php

session_start();


if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
} else {

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include 'dbhandler.php';


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
				?><div>
					<?php echo($row["user_id"]); ?>
					<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
						<h3><a style="color: white; font-weight: bold;" href="edit.php?id=<?php echo($row["user_id"]); ?>">Edit</a></h3>
					</button>
					<p>First name: <?php echo($row["fname"]); ?></p>
					<p>Last name: <?php echo($row["lname"]); ?></p>
					<img src= item_img/<?php echo($row["avatar"]); ?> <br>
					<p>ZIP code: <?php echo($row["postal_code"]); ?></p>
					<p>Phone Number: <?php echo($row["phone"]); ?></p>
					<p>Email: <?php echo($row["email"]); ?></p>
					<p>Password: <?php echo($row["password"]); ?></p>
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
