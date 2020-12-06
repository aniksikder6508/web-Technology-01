<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 Username: <input type="text" name="fname">
 Password:<input type="password" name="password">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
	$password=$_REQUEST['password'];
    if (empty($name)) {
        echo "Name is empty";
    }
//else if(empty($password)){
	//echo "Password is empty";
}	//

else {
	$password=$_REQUEST['password'];
	if(empty($password)){
	echo "Password is empty";
	}
     else{   
		echo $password;
    }
}

?>

</body>
</html>