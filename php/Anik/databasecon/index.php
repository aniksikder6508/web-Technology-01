<?php



$con = mysqli_connect("localhost","root","","youtube");

mysqli_query($con, "INSERT INTO `users`(`id`,`name`,`email`,`password`) VALUES(NULL,'Amit Sikder','amlansikder6508@gmail.com','12345')");

//$sql = "INSERT INTO images (name, email, roll) VALUES ('Anik', 'amlansikder6508@gmail.com','171')";
  	// execute query
 mysqli_query($con, $sql);

?>