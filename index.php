
<?php 
	session_start();
	if(isset($_GET['path']))
		$path=$_GET['path'];
	elseif (isset ($_POST['path'])) 
		$path = $_POST['path'];
	else
		if(sizeof($_REQUEST) == 0)
			$path="index";
		else {
			$path = "404";
		}
	// Gọi tới connect để kết nối database
	require 'model/connect.php';
	require 'model/category.php';
	require 'model/product.php';
	require 'model/brand.php';
	require 'model/guest.php';
	require 'model/image.php';
	require 'model/comment.php';
	require 'model/bill.php';
	require 'model/billdetail.php';
	require 'model/core.php';
	//Gọi đến các controller để xử lí
	$route = 'index.php';
	$MESSAGE='';
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart']=array();
		$_SESSION['count']=array();
		echo "tạo section";
	}
	switch ($path) {
		case 'index':
			require 'controller/page/home.Controller.php';
			break;
		case 'product':
			require 'controller/page/product.Controller.php';
			break;
		case 'user':
			require 'controller/page/user.Controller.php';
			break;
		case 'profile':
			require 'controller/page/profile.Controller.php';
			break;
		default:
			require 'view/404.php';
			break;
	}
?>