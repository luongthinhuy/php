<?php 
	
	class User extends ConnectDB{
		function InsertUser($name, $pass){
			$sql = "INSERT INTO users (name, pass) VALUES ('$name', '$pass')";
			return mysqli_query($this->conn, $sql);
		}
		function getListUser(){
			$sql = "SELECT * FROM users";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteUser($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getUserInfo($id) {
			$sql = "SELECT * FROM users WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditUser($id, $name, $pass){
			$sql = "UPDATE users SET username = '$name', password = '$pass' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($name, $pass) {
			$sql = "SELECT * FROM users WHERE name = '$name'
			AND pass = '$pass'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
	}
?>