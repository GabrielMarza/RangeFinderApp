<?php
include 'dbhandler.php';

include 'head-n-header.php';

	if (isset($_POST['submit-search'])) {

	 $search = $_POST['search'];
			$sth = $pdo->prepare("SELECT * FROM item WHERE item_name LIKE '%$search%'");//
			$sth->execute();

			$records = $sth->fetchAll();
			// var_dump($records);

			
		}
		?>

<head>
	<title>Range Finder - Rent Results</title>
</head>
<body>
	
	<form class="row" style="background-color: #f1b453;" action="rentsomething.php" method="post">
		<div style="display:flex; margin:5% 5%; "class="topsearch">
		<div class="col-sm-4">
			<input type="text" name="search" placeholder="Search" style="padding:10% 5%; width:200%; background-color: white;" />
		</div>
		<div class="col-sm-8">
			<button class="btn btn-dark " type="submit" name="submit-search" style="align-content:left;margin-left: 75%; width: 90%;">
				<a style="color: white; font-weight: bold; font-size: 0.8em;">search</a>
			</button>
		</div>
		</div>
	</form>
	
	<h1 style="margin-top: 10%; padding-left: 0.8em; padding-right: 0.8em; font-weight: bold;">Rent Something</h1>
	<h2 style="font-size: 1.8em; padding:0.5em 1.6em 1.5em 1.7em;">Search Results:</h2>
	<div class="item-search-container">

	</div>
</body>
<?php
	foreach ($records as $row) {
					echo "
					<h3>".$row['item_name']."</h3>
					<img src=item_img/".$row['image'].">
					<h5>".$row['item_type']."</h5>

					
					<h5>".$row['description']."</h5>
					<h4>".$row['daily_rate']." CAD per day</h4>
					
					
					</div>";
				}
include 'javascript-n-footer.php';
?>
