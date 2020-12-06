<?php
session_start();

if( isset($_SESSION["email"]) )
{
		header("Location: admin.php");
}


if(isset($_POST["submit"])){

define('email1', 'amlansikder6508@gmail.com');
define('password1', '12345');


$email=$_POST["email"];
$password=$_POST["password"];


if($email==email1){
	if($password==password1){ 
		$_SESSION['email']=$email;
		header("Location:admin.php"); 
	}
	else{
		echo "pasword is wrong";
	}
}
else{
	echo "Email is wrong";
}


}  

?>