<?php
include 'dbhandler.php';
?>
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Search Results</title>
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<body>
<!-- Product Details -->
<div class ="content">
	<div class ="productdet">
		<img src="img/dslr/ds1.jpg" alt="">
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS Rebel T7</p>
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">CAD $75 per day</p>
		<p style="font-size: 1.2em; padding-left: 1.2em; padding-right: 1.2em;">Ideal for mobile device users wanting to take the next step with their photography, the EOS Rebel T7 camera combines fantastic features with easy-to-use operation for high-quality images you'll be proud to share. Harness the power of the EOS Rebel T7's large 24.1 Megapixel CMOS sensor to realize your potential for great shots.</p>
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Rent Period:</p>
		<p style="font-size: 1.2em; padding-left: 1.2em; padding-right: 1.2em;">Date:</p>
		<input type="text" name="date" placeholder="Date" required="" style="margin-top: 25px; width:100%;" />
		<p style="font-size: 1.2em; padding-left: 1.2em; padding-right: 1.2em;">To Location:</p>
		<input type="text" name="location" placeholder="Location" required="" style="margin-top: 25px; width:100%;" />
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Owner Details:</p>
		<p style="font-size: 1.2em; padding-left: 1.2em; padding-right: 1.2em;">Name: Joe Shepard</p>
		<p style="font-size: 1.2em; padding-left: 1.2em; padding-right: 1.2em;">Address: 123 Avondale Boulevard, Brampton, Ontario, L5T6T5 </p>
		<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
			<b style="font-size: 1.5em;">Rent</b>
		</button>
</body>
</html>
