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
		<div class="col-sm-8">
			<input type="text" name="search" placeholder="Search" style="margin: 10px; width:95%;" />
		</div>
		<div class="col-sm-4">
			<button class="btn btn-dark btn-lg" type="submit" name="submit-search" style="margin: 10px; width: 95%;">
				<a href="details.php" style="font-size: 1.5em;">Search</a>
			</button>
		</div>
	</form>
	<h1 style="margin-top: 15%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Rent Something</h1>
	<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em;">Search Results:</h2>
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
