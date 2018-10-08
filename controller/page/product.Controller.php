<?php
$table = 'product';
$route = 'index.php?path=product';
//Tao mang thong tin ve gio hang neu can
if(isset($_GET['action']))
    $action=$_GET['action'];
elseif (isset ($_POST['action'])) 
    $action = $_POST['action'];
else
	$action="product";
	
switch ($action){
	case "product":
		if(isset($_GET['id']))
			$id = $_GET['id'];
		else
			$id = NULL;
		$result  = Product::getProductCate($id);
		include './view/product.php';
		break;
		
	case "search":
		if(isset($_POST['txtSearch']))
			$text = $_POST['txtSearch'];
		else
			$text = NULL;
		$result = searchByName($table, $text);
		include './view/product.php';
		break;

	case "cart":
		include './view/cart.php';
		break;

	case "add":
		if(isset($_GET['id'])){
			$temp = 1;
			foreach ($_SESSION['cart'] as $key => $value) {
				if($value == $_GET['id']){
					$_SESSION['count'][$key]++;
					$temp = 0;
					break;
				}
			}
			if($temp == 1){
				array_push($_SESSION['cart'], $_GET['id']);
				array_push($_SESSION['count'], 1 );
				echo $_GET['id'];
			}
		}
		header('Location: /GearVnPHP/index.php?path=product&action=cart');
		break;
		
	case "change":
		if(isset($_GET['id'])){
			foreach ($_SESSION['cart'] as $key => $value) {
				if($value == $_GET['id']){
					$_SESSION['count'][$key] = $_GET['count'];
					break;
				}
			}
		}
		break;

	case "deleteOne":
		if(isset($_GET['id'])){
			foreach ($_SESSION['cart'] as $key => $value) {
				if($value == $_GET['id']){
					unset($_SESSION['cart'][$key]);
					unset($_SESSION['count'][$key]);
					break;
				}
			}
		}
		require './view/cart.php';
		break;
		
	case "detail":
		if(isset($_POST['content']) && $_POST['content'] != ''){
			echo $_POST['content'];
			$comment = new Comment('NULL', $_POST['content'], $_POST['hideID'], $_SESSION['user']['id']);
			$comment->insert();
		}
		$result = getById($table, $_GET['id']);
		$arrayimg = Image::GetImageByIdProduct($_GET['id']);
		$comment = Comment::getComment($_GET['id']);
		include "./view/detail.php";
		break;

	case "total":
		// Cần sửa lại để tối ưu hơn
		$total = 0; 
		foreach ($_SESSION['cart'] as $key => $value ) {
			$total += getById('product', $value)['price'] * $_SESSION['count'][$key];
		}
		$_SESSION['total'] = $total;
		echo $total;
		break;

	case "contactpay":
		include './view/pay.php';
		break;

	case "pay":
		$bill = new Bill($_SESSION['total'], $_POST['address'] , $_POST['number'],
							$_POST['payments'], $_POST['noted'], $_SESSION['user']['id'] );
		$id = $bill->insert();
		foreach ($_SESSION['cart'] as $key => $value) {
			$bill_detail = new BillDetail($value, $_SESSION['count'][$key], $id );
			$bill_detail->insert();

			$product = getById('product', $value);
			Product::updatePurchases($value, $product['purchases'] + $_SESSION['count'][$key]);
		}
		$_SESSION['cart'] = array();
		$_SESSION['count'] = array();
		include './view/success.php';
		break;
	default: 
		require 'view/404.php';
		break;
}
	$_POST[] = array();
	$_GET[] = array();
?>

        