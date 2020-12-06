<?php

require_once "dbcon.php";

if(isset($_POST['submit'])){

  $name=$_POST['uname'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $conpassword=$_POST['conpassword'];


//For photo

  $photo=$_FILES['photo']['name'];

  $photo=explode('.',$photo);
  $photo=end($photo);

  $photo=$username.".".$photo;

//associative array
  $input_error=array();

  if(empty($name)){
    $input_error['name']="Name required";
  }


  if(empty($email)){
    $input_error['email']="Email required";
  }

  if(empty($username)){
    $input_error['username']="Username required";
  }

  if(empty($password)){
    $input_error['password']="Password required";
  }

  if(empty($conpassword)){
    $input_error['conpassword']="Confirm password required";
  }



  if(count($input_error)==0){

  //Same email address check.
    $email_check = mysqli_query($con,"SELECT * FROM `users`WHERE `email`='$email'");

     if(mysqli_num_rows($email_check)==0){

// Same username check.
      $username_check = mysqli_query($con,"SELECT * FROM `users`WHERE `username`='$username'");
      if(mysqli_num_rows($username_check)==0){
          
  //Username length check more than 7 or 7 charcter  using strlen() function.         
          if(strlen($username)>=7){
              
              if(strlen($password)>=7){

                  if($password==$conpassword){

                    $password=md5($password);

                  $sql = "INSERT INTO users (name,email,username,password,photo,status) VALUES ('$name', '$email','$username','$password','$photo','inactive')";
                  
                  $result = mysqli_query($con, $sql);

                  if($result){
                    move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo);

                                       
                  }
                  else{

                    $fail="Data insert Failed";
                  }






                    
                  }
                  else{
                    echo "Password and confirm password doesn't match";
                  }
              }
              else{

                echo "Password length must be atleast 7 charcter";
              }

          }
          else{
            echo "Username length must be atleast 7 charcter";
          }
      }
      else{

          echo "The usenname already exists";
      }

     }
     else{
      echo "The email address already exists"; 
     }
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
    <link rel="stylesheet" type="text/css" href="registration.css">

    <title>User Registration</title>
  </head>
  <body>

  		<div class="title">
      <h1>User registration form</h1><hr/>  
      </div>
<?php 

 if(isset($result)){ echo '<div class="alert alert-success">'. "Data insert successfully".'</div>';unset($result);}
        
 
      




?>            
      
 
      <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
        <table  cellpadding="10">

        <tr>  
        <th>Name</th>
         <td><input type="text" name="uname"  class="form-control"></td>
          <td>
          <?php
           if(isset($input_error['name']))
           {
            echo $input_error['name'];
          }
           ?>
         </td>
      </tr>

          <tr>  
        <th>Email</th>
         <td><input type="text" name="email" placeholder="Enter Your Email" class="form-control"></td>
           <td>
          <?php
           if(isset($input_error['email']))
           {
            echo $input_error['email'];
          }
           ?>
         </td>
      </tr>



          <tr>  
        <th>Username</th>
         <td><input type="text" name="username" placeholder="Enter Your Username" class="form-control"></td>
           <td>
          <?php
           if(isset($input_error['username']))
           {
            echo $input_error['username'];
          }
           ?>
         </td>
      </tr>

          <tr>  
        <th>Password</th>
         <td><input type="password" name="password" placeholder="Enter Your Password"  class="form-control"></td>
           <td>
          <?php
           if(isset($input_error['password']))
           {
            echo $input_error['password'];
          }
           ?>
         </td>
      </tr>


          <tr>  
        <th>Confirm Password</th>
         <td><input type="password" name="conpassword" placeholder="Enter Your Confirm Password"  class="form-control"></td>
           <td>
          <?php
           if(isset($input_error['conpassword']))
           {
            echo $input_error['conpassword'];
          }
           ?>
         </td>
      </tr>

          <tr>  
        <th>Photo</th>
         <td><input type="File" name="photo"></td>
      </tr>

      </table>

      <div class="submit">

        <input type="submit" name="submit" value="Registration" class="btn btn-primary">

      </div>
    
        </form>

      </div>


    <div>
      <br/>
     <p align="center">Already have an account??? <a href="login.php">Login</a></p>

   </div>
     














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>