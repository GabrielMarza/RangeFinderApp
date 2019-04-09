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
<style media="screen">
	body{
		background-image: url(img/background.jpg);
	}
</style>
<body>
	<!-- Start your project here-->
	<div style="height: 100vh">
		<div class="flex-center flex-column">
			<div class="tb-p-c"><a href="index.php"><img src="img/logo.png"></a></div>
		</div>
	</div>

	<!-- Search Section -->
	<div class="searchSec">
		<div class="search">
			<div id ="section1" class="searchBar1">
				<input type = "text" name="search" id="searchInput" placeholder="Product, Category">
				<button >
					<img id="searchsubmit" src="img/Searchicon_01.png"/>
				</button>
				<div id="results"></div>
			</div>
		</div>
		<div class="search">
			<div id ="section1" class="searchBar1">
				<input type = "text" name="search" id="searchInput" placeholder="Location">
				<button >
					<img id="searchsubmit" src="img/Searchicon_03.png"/>
				</button>
				<div id="results"></div>
			</div>
		</div>
		<button class="searchBu"><img src="img/searchBu.png"></button>
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
