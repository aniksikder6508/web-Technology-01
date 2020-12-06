<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h3>Registration form</h3>
<form action="action.php "method="post">
<table>
<tr>
	<td>Name : </td>
	<td><input type="text" name="name" placeholder="Name"><td/>
		<tr/>

<tr>
	<td>Email : </td>
	<td><input type="email" name="email" placeholder="Email"><td/>
		<tr/>		

<tr>
	<td>Password :</td>
	<td><input type="password" name="password" placeholder="Password"><td/>
		<tr/>

</table><br/>

	Gender : &nbsp; 
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Other">Other<br/><br/>

Choice : &nbsp; 
	<input type="checkbox" name='choice[]' value="CSSE">CSSE
	<input type="checkbox" name='choice[]' value="EEE">EEE
	<input type="checkbox" name='choice[]' value="BBA">BBA<br/><br/>

Status : &nbsp; &nbsp; &nbsp; 

<select name="select">
		<option value="active">Active</option>
		<option value="deactive">Deactive</option>

	</select><br/><br/>

Comment : &nbsp; <br/>

<textarea name="textarea" rows="7" cols="30" ></textarea><br/><br/>
<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="Reset">
</form><br/>
<a href="view.php">All Users</a>
</body>
</html>