<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php
		include 'connectiondtb.php';
		$id = $_GET['id'];
		//$sql = 'SELECT * FROM user';
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "UPDATE user SET Username = '$username', pass = '$password' WHERE id = $id";
			mysqli_query($connect,$sql);
			header("Location: listuser.php");	
		}
	?>
	<h1> Edit Form</h1>
	<form method="POST" action="#" name="Register">
		<p> UserName:
			<input type="text" name="username">
		</p>
		<p> Password:
			<input type="password" name="password">
		</p>
		<p>
		<input type="submit" name="submit" value="Register">
		</p>
	</form>
</body>
</html>