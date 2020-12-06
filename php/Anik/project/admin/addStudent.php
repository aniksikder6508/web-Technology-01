<?php

require_once "dbcon.php";

if(isset($_POST['submit'])){


$name=$_POST['sname'];
$roll=$_POST['sroll'];	
$class=$_POST['class'];
$city=$_POST['city'];
$contact=$_POST['contact'];

$photo=$_FILES['photo']['name'];

  $photo=explode('.',$photo);
  $photo=end($photo);

  $photo=$roll.".".$photo;


//echo $name." ".$roll." ".$class." ".$city." ".$contact." ".$photo;
//print_r($_POST);


   $sql = "INSERT INTO student_info (name,rollno,class,city,pcontact,photo) VALUES ('$name','$roll','$class','$city','$contact','$photo')";
    $result = mysqli_query($con, $sql);

        if($result){
        	//$success = "Data insert Successfully";
        	if(isset($result)){ echo '<div class="alert alert-success">'. "Data insert successfully".'</div>';unset($result);}
           move_uploaded_file($_FILES['photo']['tmp_name'],'s_images/'.$photo);

       }

       else{

        echo '<div class="alert alert-danger">'. "Data insert Fail".'</div>';unset($result);
          }



}

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1 class="text-primary">Add Student <small>Add New Student</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  	<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Student</li>

  </ol>
</nav>

<div class=col-md-6>
	
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
    <label for="inputAddress2">Student Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Student Name" name="sname" required="">
  </div>

 	<div class="form-group">
    <label for="inputAddress2">Student Roll</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="atleast 4 digit" pattern="[0-9]{4}" name="sroll" required="">
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Class</label>
    <select class="form-control" id="exampleFormControlSelect1" name="class">
      <option value="">Select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="inputAddress2">City</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="city" name="city" required="">
  </div>

  <div class="form-group">
    <label for="inputAddress2">Contact</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="01*********" pattern="01[1|5|6|7|8|9][0-9]{8}" name="contact" required="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo" required="">
  </div>


  <div class="submit">

        <input style="margin-left: 180px; margin-top: 10px" type="submit" name="submit" value="Registration" class="btn btn-primary">

      </div>

</form>






</div>












</body>
</html>