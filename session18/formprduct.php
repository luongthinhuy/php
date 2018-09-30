<!DOCTYPE html>
<html>
<head>
	<title>Form Product</title>
</head>
<body>
	<?php
		include 'connectdtb.php';
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$sql = "INSERT INTO products(name,price,description) values ('$name','$price','$description')";
			mysqli_query($connect,$sql);
			header("Location: list.php");	
		}
	?>
	<h1>Form Product</h1>
	<form method="POST" action="#" name="products">
		<p>Name: 
			<input type="text" name="name">
		</p>
		<p>Price:
			<input type="text" name="price"> 
		</p>
		<p>Description: 
			<input type="text" name="description">
		</p>
		<p>
			<input type="submit" name="submit" value="update">
		</p>
	</form>
</body>
</html>