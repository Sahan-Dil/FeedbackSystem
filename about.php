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
	<h4><center>About Us...</center>
   <p>Sri Lanka Telecom PLC is the national Information and Communications Technology (ICT) solutions provider and the leading broadband and backbone infrastructure services provider in  Sri Lanka for over 162 years. SLT enables opportunities that empower Sri Lankans and elevates the country’s standing in the global arena. SLT’s transformation into a digital service provider has seen the Company move beyond telecommunications services to provide a variety of services and solutions that cater to a digital lifestyle.</p>
</body>
</html>