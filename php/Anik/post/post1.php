<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];


echo "First Name : ".$fname."<br/>";
echo "Last Name : ".$lname."<br/>";
echo "Email : ".$email."<br/>";


?>


<!DOCTYPE html>
<html>
<head>
	<title>post</title>
</head>

<body>
<form action="" method="POST">
<input type="text" name="fname" placeholder="First name"><br/>
<input type="text" name="lname" placeholder="Last name"><br/>
<input type="text" name="email" value="@gmail.com" placeholder="email"><br/>
<input type="submit" value="SUBMIT"><br/>
<form/>
</body>
</html>