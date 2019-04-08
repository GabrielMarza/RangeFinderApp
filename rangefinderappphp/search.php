<?php
	include 'dbhandler.php';
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
</div>
