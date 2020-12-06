<html>
<body>
<?php  $user= $_POST["name"]; 
$result="";
if(!preg_match("/[a-zA-Z]+/",$user))
{
	 $result ="Please enter valid name";
}
else
{
	$result = $user;
}



$email= $_POST["email"]; 
$result2="";
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))
{
	 $result2 ="Please enter valid email";
}
else
{
	$result2 = $email;
}

$pass= $_POST["pass"]; 
$cpass= $_POST["cpass"]; 
if($pass==$cpass){
	$result3="confirm";
}
else{
	$result3="Not matched" ;
}

?>
<?php echo $result; ?> <br/>
<?php echo $result2; ?><br/>
<?php echo $result3; ?>
</body>
</html>