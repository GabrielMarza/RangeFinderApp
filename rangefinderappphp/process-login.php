<?php

session_start();
//receive username and passowrd
$email = $_POST['email'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
$dbusername = "marza_RANGE";
$dbpassword = "0+BqNh-giRnw";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()) {
	//start session if valid and redirect to "dashboard", to index in this case...
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $row['email'];
	$_SESSION['user_id'] = $row['user_id'];

	// User is now logged into their account.
	header("Location: dashboard.php");
}else{
	//redirect to login page if invalid.
	header("Location: login.php");
}

?>
