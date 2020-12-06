<?php

session_start();

if( !isset($_SESSION["email"]) )
{
	header("Location:login.php");
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<h1>Welcome to Admin panel</h1>
<p><?php echo $_SESSION["email"] ?><p/>
<a href="logout.php">Logout</a>
</body>
</html>