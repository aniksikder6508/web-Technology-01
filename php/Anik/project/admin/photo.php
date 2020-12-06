<?php


if(isset($_POST['upload'])){


  $photo=$_FILES['photo']['name'];

  $photo=explode('.',$photo);
  $photo=end($photo);

  $photo=$session_user.".".$photo;

$sql1 = "update users set photo='{$photo}'  where username='{$session_user}'";

$result = mysqli_query($con, $sql1);

if(isset($result)){

	 move_uploaded_file($_FILES['photo']['tmp_name'],'upload/'.$photo);

       
       header('location: index.php?page=profile');
    

}

}


?>

<img class="img-thumbnail" src="upload/<?php echo $row['photo'];?>">

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">

    <label for="exampleFormControlFile1"><b>Profile Picture</b></label>
    <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
    <input type="submit" name="upload" value="Upload" class="btn btn-primary " style="margin-top: 18px" >
  </div>


</form>
	
</div>


</div>