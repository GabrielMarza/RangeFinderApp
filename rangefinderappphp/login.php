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
	<div id="login">
		<h1>Login</h1>
		<h2>Have an account? <b>Login here!</b></h2>
		<form method='post' action='process-login.php'>
			<fieldset>
				<p>E-mail: </p><input type="email" name="email" placeholder="example@email.com" required="" />
				<p>Password: </p><input type="text" name="password" placeholder="********" required="" />
				<p>Submit! </p><input id="loginBtn" type="submit" name="submit" />
			</fieldset>
		</form>
		<a href="register.php">Don't have an account? Register with us today.</a>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
