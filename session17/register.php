<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<?php 
		include 'connectiondtb.php';
		//include_once 'form.php';
		//require 'form.php';
		//require_once 'form.php';
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "INSERT INTO user(Username,pass) values ('$username','$password')";
			mysqli_query($connect,$sql);
			header("Location: listuser.php");	
		}
	?>
	<h1> Register Form</h1>
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