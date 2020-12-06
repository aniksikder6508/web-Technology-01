<?php

session_start();



if(!isset($_SESSION['username'])){
  
	header('Location: login.php');

}

else{
	
}



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="in.css">


    <title>Index</title>
  </head>
  <body>


<!navbar_Designing_part>
<div class="nbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
    </ul>

    <ul class="nav navbar-nav navbar-right">

    	<li><a href="logout.php" class="text-secondary"><span class="glyphicon glyphicon-log-in"></span>Welcome sms</a>&nbsp; &nbsp;</li>

    	<li><a href="registration.php" class="text-secondary"><span class="glyphicon glyphicon-log-in"></span>Add users</a>&nbsp; &nbsp;</li>

     <li><a href="index.php?page=profile" class="text-secondary"><span class="glyphicon glyphicon-log-in"></span>Profile</a>&nbsp; &nbsp;</li>


     <li><a href="logout.php" class="text-secondary"><span class="glyphicon glyphicon-log-in"></span>Logout</a>&nbsp; &nbsp;</li>
    </ul>

  </div>
</nav>
<br/>
</div>





<div class="overview">
<div class="row">

<div class="col-md-3">
<div class="list-group">
  <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active">
    Dashboard
  </a>
  <a href="index.php?page=addStudent" class="list-group-item list-group-item-action">Add Student</a>
  <a href="index.php?page=allStudent" class="list-group-item list-group-item-action">All Student</a>
  <a href="index.php?page=allUsers" class="list-group-item list-group-item-action">All Users</a>
</div> 
</div>


<div class="col-md-9">
  
  <?php 

      if(isset($_GET['page'])){

        $value = $_GET['page'].".php";

      }

      else{
        $value = "dashboard.php";

      }



      if(file_exists($value)){
      
     require_once $value;
      
    }

    else{
      
      echo "<h1>File not found</h1>";
    }



  ?>

</div>




</div>
</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>