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


$gender=$_POST["gender"];
$result4="";
if($gender==Male){
	$result4="male is selected";
}
elseif($gender==Female){
	$result4="Female is selected";
}

?>
<?php echo $result; ?> <br/>
<?php echo $result2; ?><br/>
<?php echo $result3; ?><br/>
<?php echo $result4; ?>
</body>
</html>