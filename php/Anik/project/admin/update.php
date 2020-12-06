<?php


require_once "dbcon.php";

if(isset($_GET['edit'])){

$id = base64_decode($_GET['edit']);

$result=mysqli_query($con,"SELECT * FROM `student_info`WHERE `id`='$id'");

$row=mysqli_fetch_assoc($result);




}



if(isset($_POST['update'])){

$name=$_POST['sname'];
$roll=$_POST['sroll'];  
$class=$_POST['class'];
$city=$_POST['city'];
$contact=$_POST['contact'];


$sql1 = "update student_info set name='{$name}',rollno='{$roll}',class='{$class}',city='{$city}',pcontact='{$contact}'  where id='{$id}'";

 if(mysqli_query($con, $sql1)){
        header('location: index.php?page=allStudent');
    }else{
        return "Update fails";
    }

}


?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1 class="text-primary">Update Student <small>Update Student</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  	<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=allStudent">All Student</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update Student</li>

  </ol>
</nav>

<div class=col-md-6>
	
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
    <label for="inputAddress2">Student Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Student Name" name="sname" required="" value="<?= $row['name'];?>">
  </div>

 	<div class="form-group">
    <label for="inputAddress2">Student Roll</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="atleast 6 digit" pattern="[0-9]{6}" name="sroll" required="" value="<?= $row['rollno'];?>">
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Class</label>
    <select class="form-control" id="exampleFormControlSelect1" name="class">
      <option value="">Select</option>
      <option value="1" <?= $row['class']=='1'? 'selected':'' ?>>1</option>
      <option value="2" <?= $row['class']=='2'? 'selected':'' ?>>2</option>
      <option value="3" <?= $row['class']=='3'? 'selected':'' ?>>3</option>
      <option value="4" <?= $row['class']=='4'? 'selected':'' ?>>4</option>
      <option value="5" <?= $row['class']=='5'? 'selected':'' ?>>5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="inputAddress2">City</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="city" name="city" required="" value="<?= $row['city'];?>">
  </div>

  <div class="form-group">
    <label for="inputAddress2">Contact</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="01*********" pattern="01[1|5|6|7|8|9][0-9]{8}" name="contact" required="" value="<?= $row['pcontact'];?>">
  </div>


  
  <div class="submit">

        <input style="margin-left: 180px; margin-top: 10px" type="submit" name="update" value="Update" class="btn btn-primary">

      </div>

</form>



</div>












</body>
</html>