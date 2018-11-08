<?php 
	class Product {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertProduct($name, $image){
			$sql = "INSERT INTO sanpham (name, image) VALUES ('$name', '$image')";
			return mysqli_query($this->conn, $sql);
		}
		//funtion frontend
		function getListProduct() {
			$sql = "SELECT * FROM sanpham";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getListProductAdmin() {
			$sql = "SELECT * FROM sanpham";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM sanpham WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getProductInfo($id) {
			$sql = "SELECT * FROM sanpham WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditProduct($id, $name, $image){
			$sql = "UPDATE sanpham SET name = '$name', image = '$image' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
	}
?>