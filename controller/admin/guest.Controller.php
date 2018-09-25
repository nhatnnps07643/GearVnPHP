

<?php 
	//Gọi đến model
	$url_requrire =  "./Admin/guest.php";
	$table = "guest";
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
		case "reset":
			guest::reset($_GET['id']);
			break;
		//KẾT THÚC XỬ LÍ DANH MỤC
		default :
			$url_requrire = 'view/404.php';
			break;
	}
	require $url_requrire;
?>