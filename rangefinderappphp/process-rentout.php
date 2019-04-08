<?php
	//receive values user submitted from form
	$item_name = $_POST['item_name'];
	$item_type = $_POST['item_type'];
	$item_avl = $_POST['item_avl'];
	$description = $_POST['description'];
	$daily_rate = $_POST['daily_rate'];
	//upload file
	$image = 'uploads/';
	$image = $image . basename($_FILES['image']['name']);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
	    echo "File is valid, and was successfully uploaded.\n";

	} else {
	    echo "Possible file upload attack!\n";
	}
	//record filename in database
	$filename = $_FILES['image']['name'];

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_RANGE";
	$dbpassword = "0+BqNh-giRnw";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	$stmt = $pdo->prepare("INSERT INTO `item` (`id`, `item_name`, `item_type`, `item_avl`, `description` `daily_rate`, `image`) VALUES (NULL, '$item_name', '$item_type', '$item_avl', '$description', '$daily_rate', '$image'); ");

	$stmt->execute();

	echo('completed');

	//redirect to rentout page.
	header("Location: rentout.php");
?>
