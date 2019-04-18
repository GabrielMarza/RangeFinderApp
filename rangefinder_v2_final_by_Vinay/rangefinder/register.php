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
	<title>Range Finder - Register Account</title>
</head>
<body>
	<div class="content">
		<div id="register">
			<h1 style="margin-top: 15%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Register Page</h1>
			<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em;">Have an account with us? <a href="login.php">Login over here.</a></h2>
			<form method="POST" enctype="multipary/form-data" action="process-register.php">
				<fieldset class="container">
					<input type="text" name="fname" placeholder="Enter your first name." required="" value="" style="margin-top: 25px; width:100%;" />
					<input type="text" name="lname" placeholder="Enter your last name." required="" value="" style="margin-top: 25px; width:100%;" />
					<input type="text" name="address" placeholder="Enter your address." required="" value="" style="margin-top: 25px; width:100%;" />
					<input type="text" name="postal_code" placeholder="Enter your postal code" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" placeholder="L#L-#L#" required="" value="" style="margin-top: 25px; width:100%;" />
					<input type="email" name="email" placeholder="example@email.com" required="" value="" style="margin-top: 25px; width:100%;" />
					<input type="tel" name="phone" placeholder="123-456-7890." pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" value="" style="margin-top: 25px; width:100%;" />
					<input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password" placeholder="Password" style="margin-top: 25px; width:100%;" />
					<input title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password2" placeholder="Confirm password" style="margin-top: 25px; width:100%;" />
					<button class="btn btn-warning btn-lg" id="registerBtn" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
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
