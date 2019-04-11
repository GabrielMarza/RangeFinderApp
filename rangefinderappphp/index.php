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
	<title>Range Finder - Home</title>
</head>
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
                      <input type = "text" name="search"  placeholder="Product, Category">
                      <button>
                        <img id="searchsubmit" src="img/Searchicon_01.png"/>
                      </button>
                      <div id="results"></div>
                </div>
        </div>
         <div class="search">
                <div id ="section1" class="searchBar1">
                      <input type = "text" name="search"  placeholder="Location">
                      <button>
                        <img id="searchsubmit" src="img/Searchicon_03.png"/>
                      </button>
                      <div id="results"></div>
                </div>
        </div>
		<button class="btn btn-warning btn-lg" type="button" name="submit" style="margin-top: 50px; width: 90%;">
			<b style="font-size: 1.5em;">Search</b>
		</button>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
