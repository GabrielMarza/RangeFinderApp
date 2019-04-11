<?php
include 'dbhandler.php';
?>
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Rent Results</title>
</head>
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
	
	<h1 style="margin-top: 10%; padding-left: 0.8em; padding-right: 0.8em; font-weight: bold;">Rent Something</h1>
	<h2 style="font-size: 1.8em; padding:0.5em 1.6em 1.5em 1.7em;">Search Results:</h2>
	<div class="item-search-container">
		<?php
		$sql = "SELECT * FROM item";
		$result = mysqli_query($dsn, $dbusername, $dbpassword);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='item-box'>
				<h3>".$row['item_name']."</h3>
				<p>".$row['item_type']."</p>

				<p>".$row['item_avl']."</p>
				<p>".$row['description']."</p>
				<p>".$row['daily_rate']."</p>
				<p>".$row['item_date']."</p>
				<img src=".$row['image'].">
				</div>";
			}
		}
		?>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
