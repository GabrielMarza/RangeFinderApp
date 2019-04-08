<?php
	include 'dbhandler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Range Finder - Rent List</title>
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
<!-- FOOTER GOES HERE -->
<footer>
</footer>
</html>
