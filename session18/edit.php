<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<?php
		include 'connectdtb.php';
		$id = $_GET['id'];
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$sql = "UPDATE products SET name = '$name', price = '$price', description = '$description' WHERE id = $id";
			mysqli_query($connect,$sql);
			header("Location: list.php");	
		}
	?>
	<h1> Edit Form</h1>
	<form method="POST" action="#" name="products">
		<p> Name:
			<input type="text" name="name">
		</p>
		<p> Price:
			<input type="text" name="price">
		</p>
		<p> Description:
			<input type="text" name="description">
		</p>
		<p>
		<input type="submit" name="submit" value="UPDATE">
		</p>
	</form>
</body>
</html>