<?php 
	class Categories {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertCategories($name){
			$sql = "INSERT INTO categories (name) VALUES ('$name')";
			return mysqli_query($this->conn, $sql);
		}
		function getListCategories() {
			$sql = "SELECT * FROM categories";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
 ?>