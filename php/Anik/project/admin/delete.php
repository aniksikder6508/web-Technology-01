<?php

require_once "dbcon.php";

$id = base64_decode($_GET['id']);

$result=mysqli_query($con,"DELETE FROM `student_info` WHERE `id` = '$id'");

if($result){
	header('Location: index.php?page=allStudent');
}

else{

	echo mysqli_error($con);
}

?>