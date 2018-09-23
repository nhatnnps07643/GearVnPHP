

<?php 
	//Gọi đến model
	$url_requrire =  "Admin/managerProd.php";

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
				$image = "";
				if(isset($_FILES['image'])){
					$image = './view/Public/img/product/'.$_FILES['image']['name'];
				}
				$sale = $_POST['sale'];
				$decs = $_POST['decs'];
				$special =  isset($_POST['special-cb']) ? 1 : 0;
				$stock = $_POST['stock'];
				$guarantee = $_POST['guarantee'];
				$id_category = $_POST['category'];
				$id_brand = $_POST['brand'];
				//Kiểm tra sản phẩm có tồn tại hay chưa
				if(Product::getProductByName($name) == null){
					$product = new Product(NULL, $name, $image, $price, $sale, $decs,$special,$stock,$guarantee,$id_category, $id_brand);
					$product->insert();
				}else {
					$MESSAGE = "Sản phẩm đã tồn tại";
				}
				if($image != '')
					move_uploaded_file ( $_FILES['image']['tmp_name'] , $image );
			}

			break;
		case "delete-multi-pro":
			if(isset($_POST['check'])){
				$list_id = Array();
				$list_id = $_POST['check'];
				Product::deleteMulti($list_id);
				break;
		}
		case "delete":
			Product::deleteById($_GET['id']);
			break;
		case "delete":
			if(isset($_GET['id']))
				Product::deleteById($_GET['id']);
			break;
		case "form-update":
			$result = Product::getProductById($_GET['id']);
			$url_requrire = './Admin/form-product.php';
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
				if(isset($_FILES['image'])){
					$image = $_FILES['image'];
					$url = './view/Public/img/product/'.$image['name'];
					move_uploaded_file ( $image['tmp_name'] , $url );
				}else{
					$url = $_POST['hiddenIMG'];
				}
				$product = new Product($id, $name, $url, $price, $sale, $decs,$special,$stock,$guarantee,$id_category, $id_brand);
				$product->update();
			}
			$_POST = array();
		break;
		//KẾT THÚC XỬ LÍ DANH MỤC
		default :
			$url_requrire = 'view/404.php';
			break;
	}
	require $url_requrire;
?>