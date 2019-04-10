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
	<form class="row" style="background-color: #f1b453;" action="search.php" method="post">
		<div class="col-sm-8">
			<input type="text" name="search" placeholder="Search" style="margin: 10px; width:95%;" />
		</div>
		<div class="col-sm-4">
			<button class="btn btn-dark btn-lg" type="submit" name="submit-search" style="margin: 10px; width: 95%;">
				<a href="details.php" style="font-size: 1.5em;">Search</a>
			</button>
		</div>
	</form>
	<!-- Product Details -->
<div class ="content">
	<div class ="productdet">
		<a href="product-details.php"><img src="img/dslr/ds1.jpg" alt=""></a>
		<a href="product-details.php"><p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS Rebel T7</p></a>
		<img src="img/dslr/ds4.jpg" alt="">
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS 6D Mk2</p>
		<img src="img/dslr/ds5.jpg" alt="">
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS RP Mirrorless</p>
</body>
</html>
