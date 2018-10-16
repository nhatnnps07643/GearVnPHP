
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
		require 'model/guest.php';
		require 'model/image.php';
		require 'model/core.php';
		require 'model/bill.php';
		//Gọi đến các controller để xử lí
		ini_set('upload_max_filesize', '10M');
		$MESSAGE='';
		switch ($path) {
			case 'category':
				require 'controller/admin/category.Controller.php';
				break;

			case 'product':
				require 'controller/admin/product.Controller.php';
				break;

			case 'brands':
				require 'controller/admin/brand.Controller.php';
				break;

			case 'guest':
				require 'controller/admin/guest.Controller.php';
				break;

			case 'image':
				require 'controller/admin/image.Controller.php';
				break;
			
			case 'bill':
				require 'controller/admin/bill.Controller.php';
				break;
			
			default:
				require 'view/404.php';
				break;
		}
	?>
		

	