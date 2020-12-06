<?php

$fname=$_GET["fname"];
$lname=$_GET["lname"];
$email=$_GET["email"];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Get method 1</title>
</head>

<body>

<form action="" method="GET">
	
<input type="text" name="fname" placeholder="First name"><br/>
<input type="text" name="lname" placeholder="Last name"><br/>
<input type="email" name="email" placeholder="email"><br/>
<input type="submit" value="submit">


</form><br/>


First name : <?php echo $fname ?> <br/>
Last name : <?php echo  $lname ?> <br/>
Email :      <?php echo $email ?> <br/>


</body>
</html>

