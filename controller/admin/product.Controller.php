

<?php 
	//Gọi đến model
	$url_requrire =  "./Admin/product.php";
	$table = "product";
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
		case "add-product":
			if(isset($_POST['name'])){
				$name = $_POST['name'];
				$price = $_POST['price'];
				
				$image = './view/Public/img/product/' .$_FILES['image']['name'];
				$sale = $_POST['sale'];
				$decs = $_POST['decs'];
				$special =  isset($_POST['special-cb']) ? 1 : 0;
				$stock = $_POST['stock'];
				$guarantee = $_POST['guarantee'];
				$id_category = $_POST['category'];
				$id_brand = $_POST['brand'];
				//Kiểm tra sản phẩm có tồn tại hay chưa
				if(getByName($table,$name) == null){
					$product = new Product(NULL, $name, $image, $price, $sale, $decs,$special,$stock,$guarantee,$id_category, $id_brand);
					$product->insert();
					move_uploaded_file($_FILES['image']['tmp_name'] , $image );
				}else {
					$MESSAGE = "Sản phẩm đã tồn tại";
				}
			}
			break;
		case "delete-multi-pro":
			if(isset($_POST['check'])){
				$list_id = Array();
				$list_id = $_POST['check'];
				deleteMulti($table,$list_id);
				break;
		}
		case "delete":
			if(isset($_GET['id']))
				deleteById($table,$_GET['id']);
			break;
		case "form-update":
			$result = getById($table,$_GET['id']);
			$url_requrire = './Admin/update.product.php';
			break;
		case "update":
			if(isset($_POST['hiddenID'])){
				$id = $_POST['hiddenID'];
				$name = $_POST['name'];
				$price = $_POST['price'];
				$sale = $_POST['sale'];
				$decs = $_POST['decs'];
				$special =  isset($_POST['special-cb']) ? 1 : 0;
				$stock = $_POST['stock'];
				$guarantee = $_POST['guarantee'];
				$id_category = $_POST['category'];
				$id_brand = $_POST['brand'];
				isset($_POST['cb']) ? $cb = 1 : $cb = 0;
				$url= '';
				if( $_FILES['image']['name'] != null){
					$image = $_FILES['image'];
					$url = './view/Public/img/product/'.$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'] , $url );
					print_r($_FILES['image']['tmp_name']);
				}else{
					$url = $_POST['hiddenIMG'];
				}
				$product = new Product($id, $name, $url, $price, $sale, $decs,$special,$stock,$guarantee,$id_category, $id_brand);
				$product->update();
			}
		break;
		//KẾT THÚC XỬ LÍ DANH MỤC
		default :
			$url_requrire = 'view/404.php';
			break;
	}
	$_POST = array();
	// $_FILES = array();
	require $url_requrire;
?>