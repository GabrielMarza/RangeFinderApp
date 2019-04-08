<?php
session_start();

$dsn = "mysql:host=localhost;dbname=marza_RangeFinderApp;charset=utf8mb4";
$dbusername = "marza_RANGE";
$dbpassword = "0+BqNh-giRnw";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Range Finder - Rent Out</title>
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<!-- HEADER GOES HERE -->
<header>
	<nav>
		<ul>
			<li class="dropdownBtn"><img id="" src="img/logo.png" /></li>
			<li class=""><a href="index.php">Home</a></li>
			<?php if ($_SESSION['logged-in'] == true) { ?>
				<li class=""><a href="rentsomething.php">Rent Something</a></li>
				<li class=""><a href="rentout.php">Rent your own tools out</a></li>
				<li class=""><a href="dashboard.php">Dashboard</a></li>
				<li class=""><a href="logout.php">logout</a></li>
				<?php
			}else{ ?>
				<li class=""><a href="login.php">Login</a></li>
				<li class=""><a href="register.php">Register</a></li>
			<?php } ?>
		</ul>
	</nav>
</header>
<body>
	<h1>Rent your own tools out</h1>
	<p>Have any camera, or photography equipment you want to rent out?</p>
	<form method='post' enctype='multipart/form-data' action='process-rentout.php'>
		<fieldset>
			<p>Item Name: </p><input type="text" name="item_name" placeholder="Enter your item name." required="" value="" />
			<select name="item_type">
				<option value="Lens">Lens</option>
				<option value="Light">Light</option>
				<option value="DSLR">DSLR</option>
				<option value="Tripod">Tripod</option>
				<option value="Background">Background</option>
				<option value="VCamera">Video Camera</option>
			</select>
			<p>Item Availability: </p><input type="checkbox" name="item_avl" required="" />
			<p>Description: </p><input type="text" name="description" placeholder="Add a description of your item here." value="" />
			<p>Daily Rate: </p><input type="text" name="daily_rate" placeholder="" required="" value="" />
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
				<img src="uploads/<?php echo($row["filename"]); ?>" />
				<a href="uploads/<?php echo($row["filename"]); ?>"><?php echo($row["filename"]); ?></a>
			</div>
		<?php }
		?>
	</section>
</body>
<!-- FOOTER GOES HERE -->
<footer>
</footer>
</html>
