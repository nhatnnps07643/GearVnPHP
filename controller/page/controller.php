<?php

//bat dau quan ly session voi mot cookie dai han
session_start();

//Tao mac dinh bien session cho nguoi dung sau khi dang nhap thanh cong

//Tao mang thong tin ve gio hang neu can
if(!isset($_SESSION['cart']))
    $_SESSION['cart']=array();

if(isset($_GET['action']))
    $action=$_GET['action'];
elseif (isset ($_POST['action'])) 
    $action = $_POST['action'];
else
    $action="home";

switch ($action){
    case "index":
        require '../view/home.php';
        break;
    case "login":
        include '../view/login.php';
        break;
    case "login_action":
//        $username = $_POST['txtUsername'];
//        $password = $_POST['txtPassword'];
//        $user = new c...
    case "home":
        include './view/home.php';
        break;
    case "add_cart":
        echo add_item($_POST['productkey'], $_POST['itemqty']);
        include '../view/cart_view.php';
        break;
    case "update_cart":
        $new_list = $_POST['newqty'];
        foreach ($new_list as $key => $qty){
            if($_SESSION['cart'][$key] != $qty){
                update_item($key, $qty);
            }
        }
        include '../view/cart_view.php';
        break;
    case "show_cart":
        include '../view/cart_view.php';
        break;
    case "show_add_item":
        include '../view/home.php';
        break;
    case "empty_cart":
        unset($_SESSION['cart']);
        include '../view/cart_view.php';
        break;
    case "order":
        $o = new order();
        //$orderid = $o->createOrder($_SESSION['cus_to_mer']);
        $orderid = $o->createOrder(1);// dung tam cho kg co id 1, sau nay thay id cua kg da login
        $_SESSION['order_id']=$orderid;
        $total=0;
        foreach ($_SESSION['cart'] as $key => $item){
            $o->insertOrderDetail($key, $orderid,$item['cost'], $item['qty'], $item['total']);
            $total += $item['total'];
        }
        $o->updateOrderTotal($orderid, $total);
        include '../view/order.php';
        break;
    case "prodetail":
        include '../view/prodetail.php';
		break;
	default: 
		require 'view/404.php';
		break;
}
?>

        