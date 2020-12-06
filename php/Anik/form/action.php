<?php

require_once "dbcon.php";

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$choice=implode(",",$_POST['choice']);






$status=$_POST['select'];
$comment=$_POST['textarea'];




$result=mysqli_query($con,"INSERT INTO `form`(`name`,`email`,`password`,`gender`,`choice`,`status`,`comment`) VALUES('$name','$email','$password','$gender','$choice','$status','$comment')");

if($result){

	header('Location: view.php');
}

else{
	echo "Error";
}






}
?>