<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<?php
		include 'connectdtb.php';
		$sql = 'SELECT * FROM products';
		$result = mysqli_query($connect,$sql);
	?>
	<form method = “post” action = “search.php”>
		<input type = “text” name = “key” = “key”>
		<button type = “submit” name = “search”> Search </button>
	</form>
	<a href="formprduct.php">Form Product</a>
	<h1>List Products</h1>
	<?php
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo $row['id'].' - '.$row['name'].' - '.$row['price'].' - '.$row['description'];
				echo "<a href='edit.php?id=$id'> edit</a>";
				echo "<a href='delete.php?id=$id'> delete</a>";
				echo "<br>";
			}
		} 
	?>
</body>
</html>