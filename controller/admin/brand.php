
<?php

if(isset($_GET['action']))
	$action=$_GET['action'];
elseif (isset ($_POST['action'])) 
	$action = $_POST['action'];
else
	$action="home";

switch ($action) {
	
	case "home":
		require "./Admin/managerCategory.php";
		break;
	// XỬ LÍ DANH MỤC
	case "add-category":
		if(isset($_POST['action'])){
			$name = $_POST['name'];
			$image = $_FILES['image'];
			$cb = 0;
			if(isset($_POST['cb']))
				$cb = 1;
			if($image != null)
				$url = './view/Public/img/category/'.$image['name'];
			//Kiểm tra xem tên danh mục có tồn tại hay không 
			$checkIsset = Category::searchCateByName($name);
			if($checkIsset == null){
				move_uploaded_file ( $image['tmp_name'] , $url );
				$cate = new Category('',$name, $cb, $url);
				$cate->insert();
			}else{
				$MESSAGE = "Đã tồn tại danh mục này rồi";
			}
		}
		require './admin/managerCategory.php';
		$_POST=array();
		break;

	case "delete-cate":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			Category::deleteById($id);
		}
		require './admin/managerCategory.php';
		break;

	case "delete-multi-cate":
			if(isset($_POST['check'])){
				$list_id = Array();
				$list_id = $_POST['check'];
				Category::deleteMulti($list_id);
			}
		require './admin/managerCategory.php';
		break;

	case "update-cate-form":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$result = Category::getCateById($id);
			require './admin/managerCategory.php';
		}
		break;

	case "update-cate":
		if(isset($_POST['hiddenID'])){
			$id = $_POST['hiddenID'];
			$name = $_POST['name'];
			isset($_POST['cb']) ? $cb = 1 : $cb = 0;
			$url= '';
			if(isset($_FILES['image'])){
				$image = $_FILES['image'];
				$url = './view/Public/img/category/'.$image['name'];
				move_uploaded_file ( $image['tmp_name'] , $url );
			}else{
				$url = $_POST['hiddenIMG'];
			}
			$cate_update = new Category($id, $name , $cb, $url);
			$cate_update->update();
		}
		$_POST = array();
		require './admin/managerCategory.php';
		break;
}
//KẾT THÚC XỬ LÍ DANH MỤC
?>