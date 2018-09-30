<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = '18php04_01';
	$connect = mysqli_connect($server,$username,$password,$database);
	if(mysqli_connect_errno()){
		echo "False to connect to MySQL:".mysqli_connect_errno();
	} 
?>