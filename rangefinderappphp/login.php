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
	<title>Range Finder - Login</title>
</head>
<body>
	<div class="content">
		<div id="login">
			<div class="flex-center flex-column">
				<h1 class="price" style="margin-top: 15%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Login</h1>
				<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em;">Don't have an account? <a href="register.php">Register with us today.</a></h2>
			</div>
			<form method='post' action='process-login.php'>
				<fieldset class="container">
					<input type="email" name="email" placeholder="E-mail" required="" style="margin-top: 25px; width:100%;" />
					<input type="text" name="password" placeholder="Password" required="" style="margin-top: 25px; width:100%;" />
					<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; width: 100%;">
						<b style="font-size: 1.5em;">Submit</b>
					</button>
				</fieldset>
			</form>
		</div>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
