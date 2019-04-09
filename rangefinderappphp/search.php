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
<h1>Search Page</h1>
<body>
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
