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
    <h2><center>Contact</center><br><br><br>
    <img src="contact.jpg" width="650" height="450">
</body>
</html>