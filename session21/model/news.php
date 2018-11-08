<?php 
	class News {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertNews($title){
			$sql = "INSERT INTO tintuc (title) VALUES ('$title')";
			return mysqli_query($this->conn, $sql);
		}
		function getListNews(){
			$sql = "SELECT * FROM tintuc";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
 ?>