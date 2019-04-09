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
<body>
	<div id="login">
		<h1>Login Page</h1>
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

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
<!-- FOOTER GOES HERE -->
<footer>
</footer>
</html>
