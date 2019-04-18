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
		<form method='post' action='process-transaction.php'>
			<img src="img/dslr/ds1.jpg" alt="" style="padding-left: 1.2em;" />
			<h1 style="font-size: 3em; padding-left: 1.2em; padding-right: 1.8em; font-weight: bold;">Canon EOS Rebel T7</h1>
			<h2 style="font-size: 2em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">CAD $75 per day</h2>
			<h2 style="font-size: 2em; padding-left: 1.2em;  margin-top: 50px; padding-right: 1.2em; font-weight: bold;">Payment Methode:</h2>
			<h2 style="font-size: 2em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Owner Details:</h2>
			<p style="font-size: 1.6em; padding-left: 1.2em; padding-right: 1.2em;">Name: Joe Shepard</p>
			<p style="font-size: 1.6em; padding-left: 1.2em; padding-right: 1.2em;">Address: 123 Avondale Boulevard, Brampton, Ontario, L5T6T5 </p>
			<select class="form-control" name="item_type" style="margin-top: 25px; Background-color: #ecf0f1;">
				<option value="Debit">Debit</option>
				<option value="Visa">Visa</option>
				<option value="Master_card">Master card</option>
				<option value="Paypal">Paypal</option>
				<option value="Ethereum">Ethereum</option>
			</select>
			<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
				<b style="font-size: 1.5em;">Proceed to Rent Item</b>
			</button>
		</form>
	</div>
</body>
</html>
