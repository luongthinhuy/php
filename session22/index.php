<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>News - 18php04</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	include 'controller/backend_controller.php';
	$handleRequest = new BackendController();
	$handleRequest->handleRequest();
?>
</body>
</html>