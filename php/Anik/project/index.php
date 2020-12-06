



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Index</title>
  </head>
  <body>
  		<div class="login" align="right">
  			<br/>
  			<a class="btn btn-success" href="admin/login.php" role="button" >Login Admin</a>
  		</div>


    <div class="container" align="center">
    	
    	<h1>Welcome to student management</h1>
    </div>

    	<div class="form">
    		<br/>
    	<form action="" method="post">
    		<table class="table table-bordered">
    			<tr align="center">
    				<th colspan="2" >Student Information</th>
    			</tr>

    			<tr>
    				<th>Choose Class</th>
    				<td><select name="chooseclass" required="">
    					<option value="">Select</option>
    					<option value="1">1</option>
    					<option value="2">2</option>
    					<option value="3">3</option>
    					<option value="4">4</option>
    					<option value="5">5</option>
    				</select>
    				</td>
    			</tr>

    			<tr>
    				<th>Roll No</th>
    				<td><input type="text" name="rollno" required="" placeholder="Enter Roll No" pattern="[0-9]{4}"></td>
    			</tr>

    			<tr align="center">
    				<th colspan="2"><input class="btn btn-primary" type="submit" name="submit" value="Show Info" ></th>
    			</tr>	

    		</table>

    		

    	</form>

    </div>



<?php

require_once "admin/dbcon.php";


    if(isset($_POST['submit'])){

        $chooseclass=$_POST['chooseclass'];
        $rollno=$_POST['rollno'];

        $result=mysqli_query($con,"SELECT * FROM `student_info` WHERE `class`='$chooseclass' and `rollno`=$rollno");

        $row=mysqli_fetch_assoc($result);

?>

        <div class="row">





<div class="col-md-4">
</div>

<div class="col-md-4">

<form action="" method="post">

<table class="table table-bordered" style="background-color: white">


<tr>
    <td><b>Name</b></td>
    <td><?php echo $row['name'];?></td>
   <td rowspan="5"><img class="img-thumbnail" style="width: 150px" src="admin/s_images/<?php echo $row['photo'];?>"></td>
 </tr>

<tr>
    <td><b>Roll no</b></td>
    <td><?php echo $row['rollno'];?></td>
 </tr>

 <tr>
    <td><b>Class</b></td>
    <td><?php echo $row['class'];?></td>
 </tr>

<tr>
    <td><b>city</b></td>
    <td><?php echo $row['city'];?></td>
 </tr>
<tr>
    <td><b>Contact</b></td>
    <td><?php echo $row['pcontact'];?></td>
 </tr>

</table>


</div>

</form>

<?php

    }




?>

























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>