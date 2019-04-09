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
	<div id="register">
		<h1>Register Page</h1>
		<h2>Not yet a member? <b>Register here!</b></h2>
		<form method="POST" enctype="multipary/form-data" action="process-register.php">
			<fieldset>
				<p>First Name: </p><input type="text" name="fname" placeholder="Enter your first name." required="" value="" />
				<p>Last Name: </p><input type="text" name="lname" placeholder="Enter your last name." required="" value="" />
				<p>Address: </p><input type="text" name="address" placeholder="Enter your address." required="" value="" />
				<p>ZIP Code: </p><input type="text" name="postal_code" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" placeholder="L#L-#L#" required="" value="" />
				<p>E-mail: </p><input type="email" name="email" placeholder="contact@email.com" required="" value="" />
				<p>Phone Number: </p><input type="tel" name="phone" placeholder="123-456-7890." pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" value="" />
				<p>Password: </p><input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password" placeholder="********" />
				<p>Confirm Password: </p><input title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password2" placeholder="********" />
				<p>Submit! </p><input id="registerBtn" type="submit" name="submit" />
			</fieldset>
		</form>
		<a href="login.php">Have an account with us? Login over here.</a>
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
