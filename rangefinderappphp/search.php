<?php
include 'dbhandler.php';
?>
<?php
include 'head-n-header.php';
?>
<h1>Search Page</h1>

<div class="item-search-container">
	<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($dsn, $_POST['search']);
		$sql = "SELECT * FROM item WHERE item_name LIKE '%$search%' OR item_type LIKE '%$search%' OR description LIKE '%$search%'";
		$result = mysqli_query($dsn, $sql);

		$queryResult = mysqli_num_rows($result);

		echo "There are ". $queryResult." results!";

		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='item.php?item_name=".$row['item_name']."&item_date=".$row['item_date']."'><div class='item-box'>
				<h3>".$row['item_name']."</h3>
				<p>".$row['item_type']."</p>

				<p>".$row['item_avl']."</p>
				<p>".$row['description']."</p>
				<p>".$row['daily_rate']."</p>
				<p>".$row['item_date']."</p>
				<img src=".$row['image'].">
				</div></a>";
			}
		} else {
			echo "There are no esults matching your search!";
		}
	}
	?>

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</div>
