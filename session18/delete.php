<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<?php
		include 'connectdtb.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM products WHERE id=$id";
		mysqli_query($connect,$sql);
		header("Location: list.php");
	?>
</body>
</html>