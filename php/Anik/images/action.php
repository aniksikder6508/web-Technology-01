<?php

require_once 'dbcon.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$roll=$_POST['roll'];
$file_name=$_POST['image'];
/*
$file_name=explode('.',$file_name);

$file_ex=end($file_name);

$file_name=rand(9999,999999).date('y-m-d.').$file_ex;

echo $file_name.$name.$roll;
 */


$result=mysqli_query($con,"INSERT INTO `students`(`name`,`roll`,`image`) VALUES('$name','$roll,'$file_name')");

/*if(isset($result)){

echo "success";

}
else{
	echo "fail";

}
*/
}

?>