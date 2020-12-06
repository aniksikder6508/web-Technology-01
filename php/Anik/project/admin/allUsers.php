<?php
require_once "dbcon.php";

?>

<h1 class="text-primary">All Users <small>All Users</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Users</li>

  </ol>
</nav>

</table>

<h3>Users</h3>

<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Photo</th>
    <th>Status</th>
  </tr>

  <?php

      $sql = "SELECT * FROM `users`";

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
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><img style="width: 100px" src="images/<?php echo $row['photo'];?>"></td>
    <td><?php echo $row['status'];?></td>
    

  </tr>

<?php

}

?>
  

</table>