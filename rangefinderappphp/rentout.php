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
	<title>Range Finder - Rent Your Own Tools Out</title>
</head>
<body>
	<div class="flex-center flex-column">
		<h1 class="price" style="margin-top: 5%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Rent your own tools out</h1>
		<h2 style="font-size: 1.8em; padding-left: 1.2em; padding-right: 1.2em; ">Have any camera, or photography equipment you want to rent out?</h2>
	</div>
	<form method='post' enctype='multipart/form-data' action='process-rentout.php'>
		<fieldset class="container">
			<div class="row">
				<div class="col">
					<input type="text" name="item_name" placeholder="Enter your item name." required="" value="" style="margin-top: 25px; width:100%;" />
				</div>
			</div>
			<div class="row">
				<div class="col">
					<select class="form-control" name="item_type" style="margin-top: 25px; Background-color: #ecf0f1;">
						<option value="Lens">Lens</option>
						<option value="Light">Light</option>
						<option value="Camera">Camera</option>
						<option value="Tripod">Tripod</option>
						<option value="Background">Background</option>
						<option value="VCamera">Video Camera</option>
					</select>
				</div>
				<div class="col">
					<p class="title" style="margin-top: 25px; width:100%; font-size: 2em;">Item Availability: </p><input class="form-control" type="checkbox" name="item_avl" required="" />
				</div>
			</div>
			<input type="text" name="description" placeholder="Add a description of your item here." value="" style="margin-top: 25px; width:100%;" />
			<input type="text" name="daily_rate" placeholder="Daily Rate" required="" value="" style="margin-top: 25px; width:100%;" />
			<input type="text" name="item_date" placeholder="Date" required="" value="" style="margin-top: 25px; width:100%;" />
			<input type='file' name='image' placeholder="Image" style="margin-top: 25px; width:100%;" />
			<button class="btn btn-warning btn-lg" type="submit" name="submit" style="margin-top: 50px; margin-bottom: 50px; width: 100%;">
				<b style="font-size: 1.5em;">Rent Out!</b>
			</button>
		</fieldset>
	</form>
	<br>
	<div class="flex-center flex-column">
		<h1 class="price" style="margin-top: 5%; padding-left: 1.2em; padding-right: 1.2em; font-weight: bold;">Your rent out list:</h1>
	</div>
	<section id="item-records">
		<?php
		while($row = $stmt->fetch()) {
			?><div>
				Id: <?php echo($row["id"]); ?>
				<span><a href="item-edit.php?id=<?php echo($row["user_id"]); ?>">Edit</a></span>
				<span><a href="item-delete.php?id=<?php echo($row["user_id"]); ?>">Delete</a></span>
				<p>Item name: <?php echo($row["item_name"]); ?></p>
				<p>Item type: <?php echo($row["item_type"]); ?></p>
				<p>Item availability: <?php echo($row["item_avl"]); ?></p>
				<p>Description: <?php echo($row["description"]); ?></p>
				<p>Daily rate: <?php echo($row["daily_rate"]); ?></p>
				<p>Date: <?php echo($row["item_date"]); ?></p>
				<img src="uploads/<?php echo($row["filename"]); ?>" />
				<a href="uploads/<?php echo($row["filename"]); ?>"><?php echo($row["filename"]); ?></a>
			</div>
		<?php }
		?>
	</section>
</body>
<?php
include 'javascript-n-footer.php';
?>
