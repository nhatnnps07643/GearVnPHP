
<?php
	$url = './Admin/Category.php';
	$table = 'category';
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
				$checkIsset = getByName($table,$name);
				if($checkIsset == null){
					move_uploaded_file ( $image['tmp_name'] , $url );
					$cate = new Category('',$name, $cb, $url);
					$cate->insert();
				}else{
					$MESSAGE = "Đã tồn tại danh mục này rồi";
				}
			}
			$_POST=array();
			break;

		case "delete-cate":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				deleteById($table,$id);
			}
			break;

		case "delete-multi-cate":
				if(isset($_POST['check'])){
					$list_id = Array();
					$list_id = $_POST['check'];
					deleteMulti($table,$list_id);
				}
			break;

		case "update-cate-form":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$result = getById($table,$id);
	
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

			break;
	}
	require $url;
	//KẾT THÚC XỬ LÍ DANH MỤC
?>