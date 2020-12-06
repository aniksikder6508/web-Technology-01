<?php


require_once "dbcon.php";


?>


<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Serial no</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Gender</th>
		<th>Choice</th>
		<th>Status</th>
		<th>Comment</th>
		<th colspan="2">Action</th>
	</tr>

	<?php

		$result=mysqli_query($con,"SELECT * FROM `form`");
		while($row=mysqli_fetch_assoc($result)){
			?>

			<tr>
				<td><?php echo $row['id'];  ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['choice']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['comment']; ?></td>
				<td>
					<a href="delete.php?id=<?= base64_encode($row['id'])?>">Delete</a>
					</td>
				<td>
						<a href="edit.php?edit=<?= base64_encode($row['id'])?>">Edit</a>
					</td>
			</tr>

			<?php
		}

	?>


</table><br/>
<a href="form.php">Add Users</a>
</body>
</html>