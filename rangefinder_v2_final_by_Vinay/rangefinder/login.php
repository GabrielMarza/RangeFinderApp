<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbhandler.php';
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
					<input type="password" name="password" placeholder="Password" required="" style="margin-top: 25px; width:100%;" />
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
