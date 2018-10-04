

<?php 
	//Gọi đến model
	$url_requrire =  "./Admin/image.php";
	$table = "image";
	if(isset($_GET['action']))
		$action=$_GET['action'];
	elseif (isset($_POST['action'])) 
		$action = $_POST['action'];
	else
		$action="home";
	//CẤU HÌNH
	switch ($action){
		case "home":
			break;
		// QUẢN LÍ DANH MỤC
		case "insert":
			if(isset($_POST['name_product']) && isset($_FILES['Image'])){
				$name = $_POST['name_product'];
				$link ='view/Public/img/'. $_FILES['Image']['name'];
				move_uploaded_file($_FILES['Image']['tmp_name'], $link );
				$image = new Image(NULL,$name,$link);
				$image->insert();
			}
			break;
		case "delete-multi":
			if(isset($_POST['check'])){
				$list_id = Array();
				$list_id = $_POST['check'];
				deleteMulti($table,$list_id);
			}
			$_POST = array();
			break;
		case "delete":
			deleteById($table, $_GET['id']);
			break;

		case "formUpdate":
			$id =$_GET['id'];
			$url_requrire = './Admin/update.image.php';
			break;

		case "Search":
			if(isset($_POST['textsearch'])){
				$product = searchByName('product',$_POST['textsearch']);
				$arr = array();
				foreach ($product as $key => $value) {
					array_push($arr, $value['id']);			
				}
				$result = getListMulti('image','id_product', $arr);
			}
			break;

		case "update":
			$id =$_POST['id'];
			$id_product =$_POST['hiddenID_product'];
			if($_FILES['Image']['name'] != null){
				$img = './view/Public/img/' .$_FILES['Image']['name'];
				move_uploaded_file($_FILES['Image']['tmp_name'], $img);
			}
			else
				$img =$_FILES['hiddenIMG'];
			$image = new Image($id, $id_product, $img);
			$image->update();
			break;
		default :
			$url_requrire = 'view/404.php';
			break;
	}
	$_POST = array();
	$_FILES = array();
	if(!isset($result)){
		$result = getList($table);
	}
	require $url_requrire;
?>