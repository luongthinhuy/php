<?php 
	class User {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertUser($username, $password, $avatar){
			$sql = "INSERT INTO nguoidung (username, password, avatar) VALUES ('$username', '$password', '$avatar')";
			return mysqli_query($this->conn, $sql);
		}
		function getListUser(){
			$sql = "SELECT * FROM nguoidung";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteUser($id){
			$sql = "DELETE FROM nguoidung WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getUserInfo($id) {
			$sql = "SELECT * FROM nguoidung WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditUser($id, $name, $username){
			$sql = "UPDATE nguoidung SET username = '$username' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM nguoidung WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
	}
?>