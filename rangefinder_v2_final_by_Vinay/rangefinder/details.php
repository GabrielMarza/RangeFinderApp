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
		<div style="display:flex; margin:5% 5%; "class="topsearch">
		<div class="col-sm-4">
			<input type="text" name="search" placeholder="Search" style="padding:10% 5%; width:200%; background-color: white;" />
		</div>
		<div class="col-sm-8">
			<button class="btn btn-dark " type="submit" name="submit-search" style="align-content:left;margin-left: 75%; width: 90%;">
				<a href="details.php" style="color: white; font-weight: bold; font-size: 0.8em;">search</a>
			</button>
		</div>
		</div>
	</form>
	<!-- Product Details -->
<div class ="content">
	<div class ="productdet" style="margin:10% 10%;">
		<a href="product-details.php"><img src="img/dslr/ds1.jpg" alt=""></a>
		<a href="product-details.php"><p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS Rebel T7</p></a>
		<hr style="color:black;">
		<img src="img/dslr/ds4.jpg" alt="">
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS 6D Mk2</p>
		<hr>
		<img src="img/dslr/ds5.jpg" alt="">
		<p style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Canon EOS RP Mirrorless</p>
	</div>
</body>
</html>
