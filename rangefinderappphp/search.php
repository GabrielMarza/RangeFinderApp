<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbhandler.php';
?>
<?php
include 'head-n-header.php';
?>
<head>
	<title>Range Finder - Search Page</title>
</head>
<body>
	<form class="row" style="background-color: #f1b453;" action="search.php" method="post">
		<div class="col-sm-8">
			<input type="text" name="search" placeholder="Search" style="margin: 10px; width:95%;" />
		</div>
		<div class="col-sm-4">
			<button class="btn btn-dark btn-lg" type="submit" name="submit-search" style="margin: 10px; width: 95%;">
				<a href="details.php" style="color: white; font-weight: bold; font-size: 1.5em;">Search</a>
			</button>
		</div>
	</form>
	<h1 style="margin-top: 5%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Search Results</h1>
	<div class="item-search-container">
		<?php
		if (isset($_POST['submit-search'])) {

			// $sth = $dbh->prepare('SELECT name, colour, calories
			//     FROM fruit
			//     WHERE calories < ? AND colour = ?');
			// $sth->execute(array(150, 'red'));
			// $red = $sth->fetchAll();
			// $sth->execute(array(175, 'yellow'));
			// $yellow = $sth->fetchAll();

 $search = $_POST['search'];
			$sth = $pdo->prepare("SELECT * FROM item WHERE item_name LIKE '%$search%'");//
			$sth->execute();

			$records = $sth->fetchAll();
			var_dump($records);
				foreach ($records as $row) {
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
		}
		?>
	</div>
</body>
<?php
include 'javascript-n-footer.php';
?>
