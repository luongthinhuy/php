<?php
	include 'model/model.php';
	class Controller {
		function handleRequest() {
			echo "<br>Nhu Y";
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// lay du lieu trang chu ra
					$model = new Model();
					$home = $model->getHomeData();
					// goi view can do du lieu
					include 'view/home.php';
					var_dump($home);
					break;
				case 'about':
					$model = new Model();
					$about = $model->getAboutData();
					include 'view/about.php';
					var_dump($about);
					break;
				case 'contact':
					$model = new Model();
					$contact = $model->getContactData();
					include 'view/contact.php';
					var_dump($contact);
					break;
				case 'news':
					case 'news':
					$model = new Model();
					$news = $model->getNewsData();
					include 'view/news.php';
					var_dump($news);
					break;
					break;
				default:
					# code...
					break;
			}
			var_dump($action);
		}
	} 
?>