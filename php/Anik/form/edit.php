<?php


require_once "dbcon.php";

if(isset($_GET['edit'])){

$id = base64_decode($_GET['edit']);

$result=mysqli_query($con,"SELECT * FROM `form`WHERE `id`='$id'");

$row=mysqli_fetch_assoc($result);




}




if(isset($_POST['update'])){

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$choice=implode(",",$_POST['choice']);
$status=$_POST['select'];
$comment=$_POST['textarea'];

$data=$id." ".$name." ".$email." ".$password;

print_r($data);


/*$result=mysqli_query($con,"UPDATE `form` SET `name`='$name',`email`='$email',`password`='$password',`gender`='$gender',`choice`=$choice,`status`='$status',`comment`='$comment' WHERE `id`='$id'");

if($result){
	header('Location: view.php');
}
else{
	$error="Data not Update";
}*/




$sql1 = "update form set name='{$name}',email='{$email}',password='{$password}',gender='{$gender}',choice='{$choice}',status='{$status}',comment='{$comment}'  where id='{$id}'";

    if(mysqli_query($con, $sql1)){
        header('location: view.php');
    }else{
        return "Update fails";
    }

}

?>






<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h3>Registration form</h3>
<form  method="post">
<!form action ="edit.php?edit=<?php echo $row['id'];?>" method = "POST">
<table>
<tr>
	<td>Name : </td>
	<td><input type="text" name="name" value="<?= $row['name'];?>" >
        <input type="hidden" name="id" value="<?=$row['id'];?>">

		<td/>

		<tr/>

<tr>
	<td>Email : </td>
	<td><input type="email" name="email" value="<?=  $row['email'];?>"><td/>
		<tr/>		

<tr>
	<td>Password :</td>
	<td><input type="password" name="password" value="<?=  $row['password'];?>"><td/>
		<tr/>

</table><br/>

	Gender : &nbsp; 
	<input type="radio" name="gender"  value="Male" <?= $row['gender']=='Male'? 'checked':'' ?> >Male

	<input type="radio" name="gender" value="Female" <?= $row['gender']=='Female'? 'checked':'' ?> >Female
		

	<input type="radio" name="gender" value="Other" <?= $row['gender']=='Other'? 'checked':'' ?> >Other

	

	<br/><br/>

Choice : &nbsp; 
	<input type="checkbox" name='choice[]' value="CSSE" <?= $row['choice']=='CSSE'? 'checked':'' ?>>CSSE
	<input type="checkbox" name='choice[]' value="EEE" <?= $row['choice']=='EEE'? 'checked':'' ?> >EEE
	<input type="checkbox" name='choice[]' value="BBA" <?= $row['choice']=='BBA'? 'checked':'' ?> >BBA<br/><br/>

Status : &nbsp; &nbsp; &nbsp; 

<select name="select">
		<option value="active" <?= $row['status']=='active'? 'selected':'' ?>>Active</option>
		<option value="deactive" <?= $row['status']=='deactive'? 'selected':'' ?> >Deactive</option>

	</select><br/><br/>

Comment : &nbsp; <br/>

<textarea name="textarea" rows="7" cols="30" ><?= $row['comment'];?></textarea><br/><br/>

<input type="submit" name="update" value="update">
</form><br/>
<a href="view.php">All Users</a>
</body>
</html>





