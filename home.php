<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SLT customer support</title>
	<link rel="stylesheet" type= text/css href="style2.css">
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo.png">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</nav>

			
			<div class="center">
			<?php echo "<h1> Hi " . $_SESSION['username'] . "...</h1>"; ?>
			<h3>Welcome SLT Cutomer Support</h3>
			<h3>Make It Better</h3>
			<div class="buttons"><a href="https://www.slt.lk/">
			<button>Go to  SLT main page... </button></a>
			<a href="cusDetails.php">
			<button class="btn2">Customer Support</button></a>
		</div>
		</div>
</body>
</html>