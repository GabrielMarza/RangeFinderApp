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
	<h1>Rent your own tools out</h1>
	<p>Have any camera, or photography equipment you want to rent out?</p>
	<form method='post' enctype='multipart/form-data' action='process-rentout.php'>
		<fieldset>
			<p>Item Name: </p><input type="text" name="item_name" placeholder="Enter your item name." required="" value="" />
			<select name="item_type">
				<option value="Lens">Lens</option>
				<option value="Light">Light</option>
				<option value="Camera">Camera</option>
				<option value="Tripod">Tripod</option>
				<option value="Background">Background</option>
				<option value="VCamera">Video Camera</option>
			</select>
			<p>Item Availability: </p><input type="checkbox" name="item_avl" required="" />
			<p>Description: </p><input type="text" name="description" placeholder="Add a description of your item here." value="" />
			<p>Daily Rate: </p><input type="text" name="daily_rate" placeholder="" required="" value="" />
			<p>Date: </p><input type="text" name="item_date" placeholder="" required="" value="" />
			<p>Image: </p><input type='file' name='image' />
			<p>Rent Out! </p><input id="" type="submit" name="submit" />
		</fieldset>
	</form>
	<br>
	<h1>Your Rent Out List</h1>
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
