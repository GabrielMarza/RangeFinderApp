<?php

//receive values user submitted from form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$postal_code = $_POST['postal_code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
$dbusername = "marza_RANGE";
$dbpassword = "0+BqNh-giRnw";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `users` (`user_id`, `fname`, `lname`, `address`, `postal_code` `phone`, `email`, `password`) VALUES (NULL, '$fname', '$lname', '$address', '$postal_code', '$phone', '$email', '$password'); ");

$stmt->execute();

if($row = $stmt->fetch()) {
	//start session if valid and redirect to "dashboard", to index in this case...
	$_SESSION['logged-in'] = true;
	$_SESSION['fname'] = $row['fname'];
	$_SESSION['lname'] = $row['lname'];
	$_SESSION['address'] = $row['address'];
	$_SESSION['postal_code'] = $row['postal_code'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['user_id'] = $row['user_id'];

	// User is now logged into their account.
	header("Location: registerThankYou.php");
}else{
	//redirect to login page if invalid
	header("Location: login.php");
}

?>
