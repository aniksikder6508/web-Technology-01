
<?php

require_once "dbcon.php";


$result=mysqli_query($con,"SELECT * FROM `student_info`");
$total_student=mysqli_num_rows($result);

$result2=mysqli_query($con,"SELECT * FROM `users`");
$total_user=mysqli_num_rows($result2);
?>




 <br/>

<h1 class="text-primary">Dashboard <small>Statistics Overview</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<table>
 <tr>
     <td class="p-3 mb-2 bg-primary text-white" height="100" width="250">
       <h1 align="right"><?= $total_student?></h1><br/>
       <p align="right">All Students</p>
     </td>
     <td width="100">

     </td>
      <td class="p-3 mb-2 bg-primary text-white" height="100" width="250">
       <h1 align="right"><?= $total_user?></h1><br/>
       <p align="right">All Users</p>
     </td>
  </tr>

   <tr height="10">
     <td class="p-3 mb-2 bg-light text-white"><a href="index.php?page=allStudent">All Students</a>  
     </td>
     <td>

     </td>

      <td class="p-3 mb-2 bg-light text-white"><a href="index.php?page=allUsers">All Users</a>
    
     </td>


   </tr>



 

</table>
<hr/>
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
  </tr>

  <?php

      $sql = "SELECT * FROM `student_info`";

      $result = mysqli_query($con, $sql); 

        $count=1;

      while($row=mysqli_fetch_assoc($result)){
       
  ?>


   <tr>
    <th><?php 
    echo $count;
    $count++;
    ?></th>
    <th><?php echo ucwords($row['name']);?></th>
    <th><?php echo $row['rollno'];?></th>
    <th><?php echo ucwords($row['city']);?></th>
    <th><?php echo $row['pcontact'];?></th>
    <th><?php echo $row['class'];?></th>
    
    <th><?php echo $row['datetime'];?></th>
    <th><img style="width: 100px" src="s_images/<?php echo $row['photo'];?>"></th>
  </tr>

<?php

}

?>
  

</table>

</div>