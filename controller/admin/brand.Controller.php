
<?php
$url_requrire =  "Admin/brands.php";
$table = 'brands';
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
			$url = "";
			if($image['name'] != null)
				$url = './view/Public/img/category/'.$image['name'];
			//Kiểm tra xem tên danh mục có tồn tại hay không 
			$checkIsset = getByName($table,$name);
			if($checkIsset == null){
				move_uploaded_file ( $image['tmp_name'] , $url );
				$cate = new Brands(NULL,$name, $url );
				$cate->insert();
			}else{
				$MESSAGE = "Đã tồn tại danh mục này rồi";
			}
		}
		break;

	case "delete":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			deleteById($table,$id);
		}
		break;

	case "delete-multi":
		if(isset($_POST['check'])){
			$list_id = Array();
			$list_id = $_POST['check'];
			deleteMulti($table,$list_id);
		}
		break;

	case "update-form":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$result = getById($table,$id);
		}
		break;
	case "search":
		break;

	case "update":
		if(isset($_POST['hiddenID'])){
			$id = $_POST['hiddenID'];
			$name = $_POST['name'];
			$url= '';
			if($_FILES['image']['name'] != null){
				$image = $_FILES['image'];
				$url = './view/Public/img/category/'.$image['name'];
				move_uploaded_file ( $image['tmp_name'] , $url );
			}else{
				$url = $_POST['hiddenIMG'];
			}
			$cate_update = new Brands($id, $name, $url);
			$cate_update->update();
		}
		break;
}
	$_POST = array();
	$_FILES = array();
	require $url_requrire;
//KẾT THÚC XỬ LÍ DANH MỤC
?>