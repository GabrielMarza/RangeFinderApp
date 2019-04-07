<?php

	$user_id = $_POST['user_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$postal_code = $_POST['postal_code'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_IMM";
	$dbpassword = "xcttqM8g8Fu2KCH";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	$stmt = $pdo->prepare("UPDATE `users` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `phone` = '$phone', `password` = '$password' WHERE `users`.`user_id` = $user_id;");

	$stmt->execute();

	header("Location: dashboard.php");

?>
