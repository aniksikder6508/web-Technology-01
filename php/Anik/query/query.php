<?php

require_once "dbcon.php";
//dbcon
$con = mysqli_connect("localhost","root","","youtube");

//Insert query

$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";

 $sql = "INSERT INTO users (name,email,username,password,photo,status) VALUES ('$name', '$email','$username','$password','$photo','inactive')";
  
 $result = mysqli_query($con, $sql);

//update query
$sql1 = "update form set name='{$name}',email='{$email}',password='{$password}',gender='{$gender}',choice='{$choice}',status='{$status}',comment='{$comment}'  where id='{$id}'";

//select query
$result=mysqli_query($con,"SELECT * FROM `form`WHERE `id`='$id'");

//delete query
$result=mysqli_query($con,"DELETE FROM `form` WHERE `id` = '$id'");


(mysqli_num_rows($username_check)>0);

$row=mysqli_fetch_assoc($result);

$row['email']=$email;


//important code...

$name=$POST['name'];

$password=md5($password);


if(isset($result)){ echo '<div class="alert alert-success">'. "Data insert successfully".'</div>';unset($result);}


header('location: index.php');

print_r($_POST);

?>

<?php echo $row['username'];?>
value="<?= $row['name'];?>"





