<?php
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM student WHERE username='". $username."' AND password='". $password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
   }
 else {
$error = "Username or Password is invalid";
}
$conn->close();

}
}


?>
