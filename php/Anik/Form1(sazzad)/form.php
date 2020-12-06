<html>
<body>


<form action="control/myaction.php" method="post">
<fieldset>
<h1>Form Validation</h1>
<b>Name: <b/><input type="text" name="name"><br/><br/>
<b>E-mail: <b/><input type="text" name="email"><br><br/>
<b>Password :<b/><input type="password" name="pass"><br/><br/>
<b>Confirm Password: <b><input type="password" name="cpass"><br/><br/>
<b>Gender :<b><input type="radio" name="gender" value="Male">Male
			  <input type="radio" name="gender" value="Female">Female<br/><br/>
<b>Interests:<b><input type="checkbox" name="m1" value="Music">Music
				<input type="checkbox" name="s1" value="Sports">Sports
				<input type="checkbox" name="r1" value="Reading">Reading
				<input type="checkbox" name="w1" value="Writing">Writing<br/><br/>
<b>Address: <b>
<textarea name="address" rows="7" cols="40">
</textarea><br/><br/>				
<input type="submit">
<input type="reset">


</fieldset>
</form>

</body>
</html>