<!DOCTYPE html>
<html>
<head>
	<title>List user</title>
</head>
<body>
	<?php
		include 'connectiondtb.php';
		$sql = 'SELECT * FROM user';
		$result = mysqli_query($connect,$sql);
		//var_dump($result);
	?>
	<a href="register.php">Register</a>
	<h1>List User</h1>
	<?php
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo $row['id'].' - '.$row['Username'].' - '.$row['pass'];
				echo "<a href='edit.php?id=$id'> edit</a>";
				echo "<a href='delete.php?id=$id'> DELETE</a>";
				echo "<br>";
			}
		} else{
			echo "No user";
		}
	?>
</body>
</html>