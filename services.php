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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main.css">

    <title>Welcome</title>
</head>
<body>
    <h2><center>Services</center><br><br><br>
    <img src="Services.png" width="750" height="250">
</body>
</html>