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
			$text = null;
		$result = Product::searchProduct($text);
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
			}
		}
		header('Location: product/cart.html');
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
	
	case "comment":
		if(isset($_GET['content']) && $_GET['content'] != ''){
			$comment = new Comment('NULL', $_GET['content'], $_GET['hideID'], $_SESSION['user']['id']);
			$comment->insert();
		}
		$comment = Comment::getComment($_GET['hideID']);
		include "./view/comment.php";
		break;
	case "detail":
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
		if(isset($_SESSION['user'])){
			$id = $_SESSION['user']['id'] ;
		}else{
			$id = NULL;
		}
		$bill = new Bill($_SESSION['total'], $_POST['address'] , $_POST['number'],
							$_POST['payments'], $_POST['noted'],$id );
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

        