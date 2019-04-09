<?php
include 'dbhandler.php';
?>
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Rent Something</title>
</head>
<body>
	<form action="search.php" method="post">
		<input type="text" name="search" placeholder="Search">
		<button type="submit" name="submit-search">Search</button>
	</form>
	<h1>Rent Something</h1>
	<h2>Search Results:</h2>
	<div class="item-search-container">
		<?php
		$item_name = mysqli_real_escape_string($dsn, $_GET['item_name']);
		$item_date = mysqli_real_escape_string($dsn, $_GET['item_date']);

		$sql = "SELECT * FROM item WHERE item_name='$item_name' AND item_date='$item_date'";
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
