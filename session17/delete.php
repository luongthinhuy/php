<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<?php
		include 'connectiondtb.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM user WHERE id=$id";
		mysqli_query($connect,$sql);
		header("Location: listuser.php");
	?>
</body>
</html>