<?php 
	include 'config/connectdb.php';
	class User extends ConnectDB{
		function InsertUser($name, $pass, $image){
			$sql = "INSERT INTO user (name, pass, image) VALUES ('$name', '$pass', '$image')";
			return mysqli_query($this->conn, $sql);
		}
		function getListUser(){
			$sql = "SELECT * FROM user";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteUser($id){
			$sql = "DELETE FROM user WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getUserInfo($id) {
			$sql = "SELECT * FROM user WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditUser($id, $name, $pass){
			$sql = "UPDATE user SET name = '$name', pass = '$pass' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($name, $password) {
			$sql = "SELECT * FROM user WHERE name = '$name'
			AND pass = '$pass'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
	}
?>