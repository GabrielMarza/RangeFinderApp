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
		<form method='post' action='rentsomething.php'>
			<h1 style="font-size: 3em; padding-left: 1.2em; padding-right: 1.8em; font-weight: bold;">Thank you for renting the</h1>
			<h1 style="font-size: 3em; padding-left: 1.2em; padding-right: 1.8em; font-weight: bold;">Canon EOS Rebel T7</h1>
			<p style="font-size: 1.6em; padding-left: 1.2em; padding-right: 1.2em;">Check your e-mail for the automated receipt.</p>
			<p style="font-size: 1.6em; padding-left: 1.2em; padding-right: 1.2em;">You can now go back and view other items people are renting out.</p>
			<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
				<b style="font-size: 1.5em;">Continue</b>
			</button>
		</form>
	</div>
</body>
</html>
