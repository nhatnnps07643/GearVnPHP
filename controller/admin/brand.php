
<?php
$url_requrire =  "Admin/Mn_brands.php";
if(isset($_GET['action']))
	$action=$_GET['action'];
elseif (isset ($_POST['action'])) 
	$action = $_POST['action'];
else
	$action="home";

switch ($action) {
	
	case "home":
		break;
	// XỬ LÍ DANH MỤC
	case "add":
		if(isset($_POST['action'])){
			$name = $_POST['name'];
			$image = $_FILES['image'];
			if($image != null)
				$url = './view/Public/img/category/'.$image['name'];
			//Kiểm tra xem tên danh mục có tồn tại hay không 
			$checkIsset = Brands::searchBrandsByName($name);
			if($checkIsset == null){
				move_uploaded_file ( $image['tmp_name'] , $url );
				$cate = new Brands(NULL,$name, $url );
				$cate->insert();
			}else{
				$MESSAGE = "Đã tồn tại danh mục này rồi";
			}
		}
	
		$_POST=array();
		break;

	case "delete":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			Brands::deleteById($id);
		}
		break;

	case "delete-multi":
	echo "vao";
			if(isset($_POST['check'])){
				$list_id = Array();
				$list_id = $_POST['check'];
				Brands::deleteMulti($list_id);
			}
		break;

	case "update-form":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$result = Brands::getBrandsById($id);
		}
		break;
	case "search":
		break;

	case "update":
		if(isset($_POST['hiddenID'])){
			$id = $_POST['hiddenID'];
			$name = $_POST['name'];
			$url= '';
			if(isset($_FILES['image'])){
				$image = $_FILES['image'];
				$url = './view/Public/img/category/'.$image['name'];
				move_uploaded_file ( $image['tmp_name'] , $url );
			}else{
				$url = $_POST['hiddenIMG'];
			}
			$cate_update = new Brands($id, $name, $url);
			$cate_update->update();
		}
		$_POST = array();
	
		break;
}
	require $url_requrire;
//KẾT THÚC XỬ LÍ DANH MỤC
?>