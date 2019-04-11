<?php
include 'dbhandler.php';
?>
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Search Results</title>
	<link rel="stylesheet" type="text/css" href="css/design.css">
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<body>
<!-- Product Details -->
<div class ="content" style="margin:2em 2em;">
	<div class ="productdet">
		<form method='post' action='process-transaction.php'>

			<img src="img/dslr/ds1.jpg" alt="" style="padding: 1.2em 1.2em 2.5em 1em; " />
			<h1 style="font-size: 2.5em;padding-right: 1.8em; font-weight: bold;">Canon EOS Rebel T7</h1>
			<h2 style="font-size: 2em; padding-right: 1.2em; font-weight: bold; color:#f1b453;"><b>CAD $75</b> per day</h2>
			<hr>
			<p style="font-size: 1.6em; padding-right: 1.2em;">Ideal for mobile device users wanting to take the next step with their photography, the EOS Rebel T7 camera combines fantastic features with easy-to-use operation for high-quality images you'll be proud to share. Harness the power of the EOS Rebel T7's large 24.1 Megapixel CMOS sensor to realize your potential for great shots.</p>
			<h2 style="font-size: 2em; margin: 50px 2px 30px 0px; font-weight: bold;">Rent Period:</h2>
			<input type="text" name="date" placeholder="Date" required="" style="width:100%;" />
			<input type="text" name="location" placeholder="To Location" required="" style="margin-top: 25px; margin-bottom: 40px; width:100%;" />

			<h2 style="font-size: 2em;margin: 5px 2px 30px 0px; font-weight: bold;">Owner Details:</h2>
			<p style="font-size: 1.6em; padding-left: 1.2em; padding-right: 1.2em;"><b>Name:</b> Joe Shepard</p>
			<p style="font-size: 1.6em; padding-left: 1.2em; padding-right: 1.2em;"><b>Address:</b> 123 Avondale Boulevard, Brampton, Ontario, L5T6T5 </p>
			<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
				<b style="font-size: 1.5em;">Rent</b>
			</button>
		</form>
	</div>
</div>
</div>
</body>
</html>
