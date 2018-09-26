

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
				$link ='view/Public/img'. $_FILES['Image']['name'];
				move_uploaded_file($_FILES['Image']['tmp_name'], $link );
				$image = new Image(NULL,$name,$link);
				$image->insert();
			}
			$_POST[] = array();
			break;
		case "delete-multi":
			if(isset($_POST['check'])){
				$list_id = Array();
				$list_id = $_POST['check'];
				deleteMulti($table,$list_id);
			}
			$_POST = array();
			break;
		default :
			$url_requrire = 'view/404.php';
			break;
	}
	$_POST = array();
	$_FILES = array();
	require $url_requrire;
?>