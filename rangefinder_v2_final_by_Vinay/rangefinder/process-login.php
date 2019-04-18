<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbhandler.php';
session_start();
//receive username and passowrd
$email = $_POST['email'];
$password = $_POST['password'];

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
