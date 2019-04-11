<?php
session_start();

$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
$dbusername = "marza_RANGE";
$dbpassword = "0+BqNh-giRnw";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Account Created</title>
</head>
<body>
	<div class="">

		<div class="flex-center flex-column">
			<h1 class="price" style="margin-top: 15%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Account Created</h1>
			<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; ">Thank You</h2>
		</div>
		<div id="">
			<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; ">Thank you for creating an account with us!</h2>
			<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; ">You can now use our services freely!</h2>
			<a href="dashboard.php"><p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; ">Go to your dashboard and view your settings.</p></a>
		</div>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
