<?php

require_once "dbcon.php";

$session_user=$_SESSION['username'];

$result=mysqli_query($con,"SELECT * FROM `users`WHERE `username`='$session_user'");

$row=mysqli_fetch_assoc($result);


?>






<h1 class="text-primary">User Profile <small>My Profile</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>

  </ol>
</nav>




<div class="row">





<div class="col-md-6">

<form action="" method="post">

<table class="table table-bordered">

 <tr>
 	<td>User ID</td>
 	<td><?php echo $row['id'];?></td>
 </tr>

<tr>
 	<td>Name</td>
 	<td><input type="text" name="uname"  class="form-control" required="" value="<?= $row['name'];?>"></td>
 </tr>

<tr>
 	<td>Username</td>
  	<td><?php echo $row['username'];?></td>
 </tr>

 <tr>
 	<td>Email</td>
 	<td><input type="email" name="email"  class="form-control" required="" value="<?= $row['email'];?>"></td>
 </tr>

<tr>
 	<td>Status</td>
 	<td><?php echo ucwords($row['status']);?></td>
 </tr>
<tr>
 	<td>Registration Date</td>
 	<td><?php echo $row['datetime'];?></td>
 </tr>

</table>


 <div class="submit" style="margin-left: 376px">

        <input type="submit" name="edit" value="Edit Profile" class="btn btn-primary " >

      </div>

</div>

</form>

<?php
if(isset($_POST['edit'])){

$uname=$_POST['uname'];
$email=$_POST['email'];



$sql1 = "update users set name='{$uname}',email='{$email}' where username='{$session_user}'";

 if(mysqli_query($con, $sql1)){
       
       header('location: index.php?page=profile');
    }

    else{
        return "Update fails";
    }



}


?>







<div class="col-md-3">

	
		
		


<?php


if(isset($_POST['upload'])){


  $photo=$_FILES['photo']['name'];

  $photo=explode('.',$photo);
  $photo=end($photo);

  $photo=$session_user.".".$photo;

$sql1 = "update users set photo='{$photo}'  where username='{$session_user}'";

$result = mysqli_query($con, $sql1);

if(isset($result)){

	 move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo);

       
       header('location: index.php?page=profile');
    

}

}


?>

<img class="img-thumbnail" src="images/<?php echo $row['photo'];?>">

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">

    <label for="exampleFormControlFile1"><b>Profile Picture</b></label>
    <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
    <input type="submit" name="upload" value="Upload" class="btn btn-primary " style="margin-top: 18px" >
  </div>


</form>
	
</div>


</div>