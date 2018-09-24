<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="./view/Public/css/main.css">
    <link rel="stylesheet" href="./admin/public/css/add.css">
</head>
<body>
	<!-- ----------CONTROLLER------------ -->
	<?php 
		session_start();
		// Điều khiển xử lí
		if(!isset($_SESSION['cart']))
		$_SESSION['cart']=array();
		if(isset($_GET['path']))
			$path=$_GET['path'];
		elseif (isset ($_POST['path'])) 
			$path = $_POST['path'];
		else
			if(sizeof($_REQUEST) == 0)
				$path="category";
			else {
				$path = "404";
			}
		// Gọi tới connect để kết nối database
		require 'model/connect.php';
		require 'model/category.php';
		require 'model/product.php';
		require 'model/brand.php';
		//Gọi đến các controller để xử lí
		$MESSAGE='';
		switch ($path) {
			case 'category':
				require 'controller/admin/managerCate.php';
				break;

			case 'product':
				require 'controller/admin/managerProd.php';
				break;

			case 'brands':
				require 'controller/admin/brand.php';
				break;
			
			default:
				require 'view/404.php';
				break;
		}
	?>

	<!-- ---------ADD SCRIPT------- -->
	<script src="view/Public/js/core.js"></script>
	<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> -->
	<script src="admin/public/js/add.js"></script>
</body>
</html>