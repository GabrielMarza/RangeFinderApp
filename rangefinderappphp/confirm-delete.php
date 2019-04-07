<?php

	//perform a delete on a record
	//receive id of record to delete.

	$user_id = $_POST["user_id"];

	$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
	$dbusername = "marza_IMM";
	$dbpassword = "xcttqM8g8Fu2KCH";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	$stmt = $pdo->prepare("DELETE FROM `users` WHERE `user_id` = $user_id");

	$stmt->execute();

	header("Location: dashboard.php");

?>
