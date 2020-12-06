<?php

require_once "dbcon.php";

session_start();

if(isset($_SESSION['username'])){
  
  header('Location: index.php');

}




if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];


 $username_check = mysqli_query($con,"SELECT * FROM `users`WHERE `username`='$username'");

 if(mysqli_num_rows($username_check)>0){
    
    $row=mysqli_fetch_assoc($username_check);

    if($row['password']==md5($password)){

      if($row['status']=='active'){

        $_SESSION['username']=$username;

        header('location: index.php');

      }

      else{

          $status_error="Your status is inactive";

      }

    }

        else{

            $password_error = "Invalid password";
                }


}

else{

   $username_error = "Invalid username";

}








}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Student Management System</title>
  </head>
  <body>

  		<div>
  			<br/>
  			<h1 align="center">Student Management System</h1>
  		</div>

  		<div>
  			<br/>
  			<h2 align="center">Admin Login Form</h2>
  		</div>

  		<div class="login">
  			<br/>
  			<form action="login.php" method="post">
  				<input type="text" name="username" placeholder="Username" class="form-control"><br/>
  				<input type="password" name="password" placeholder="Password" class="form-control"><br/>

  				<div class="submit">
  				<input type="submit" name="login" value="Login" class="btn btn-primary" align="center">
  				</div>
  			</form>

        <?php  
        if(isset($username_error)){ echo '<br/><div class="alert alert-danger">'. $username_error.'</div>';

          
      }
        ?>

        <?php  
        if(isset($password_error)){ echo '<br/><div class="alert alert-danger">'. $password_error.'</div>';

            
          }
        ?>

         <?php  
        if(isset($status_error)){ echo '<br/><div class="alert alert-danger">'. $status_error.'</div>';

            
          }
        ?>

  		</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>