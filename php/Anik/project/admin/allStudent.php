<?php
require_once "dbcon.php";

?>

<h1 class="text-primary">All Student <small>All New Student</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Student</li>

  </ol>
</nav>

</table>

<h3>New Students</h3>

<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll</th>
    <th>City</th>
    <th>Contact</th>
    <th>class</th>
    <th>Reg_date/time</th>
    <th>Image</th>
    <th colspan="2">Action</th>
  </tr>

  <?php

      $sql = "SELECT * FROM `student_info`";

      $result = mysqli_query($con, $sql); 

        $count=1;

      while($row=mysqli_fetch_assoc($result)){
       
  ?>


   <tr>
    <td><?php 
    echo $count;
    $count++;
    ?></td>
    <td><?php echo ucwords($row['name']);?></td>
    <td><?php echo $row['rollno'];?></td>
    <td><?php echo ucwords($row['city']);?></td>
    <td><?php echo $row['pcontact'];?></td>
    <td><?php echo $row['class'];?></td>
    <td><?php echo $row['datetime'];?></td>
    <td><img style="width: 100px" src="s_images/<?php echo $row['photo'];?>"></td>
    
     <td>
          <a class="btn btn-primary" role="button" href="index.php?page=update&&edit=<?= base64_encode($row['id'])?>">Edit</a> 
          </td>
  
    <td>
          <a class="btn btn-danger" role="button" href="delete.php?id=<?= base64_encode($row['id'])?>">Delete</a>
          </td>
    
  </tr>

<?php

}

?>
  

</table>