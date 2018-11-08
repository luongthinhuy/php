<?php 
	include 'config/connectdtb.php';
	include 'model/user.php';
	class BackendController {
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					if(isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$image = $_FILES['image'];
						$path = 'dist/img/';
						$imageName = uniqid().$image['name'];
						move_uploaded_file($image['tmp_name'], $path.$imageName);
						$userModel = new User();
						$userModel->InsertUser($username, $password, $imageName);
						header("Location: admin.php?action=list_user");
					}
					include 'view/backend/add_user.php';
					break;
				case 'list_user':
					
					break;
			}
		}
	}
?>
