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
    case "home":
        include './view/home.php';
        break;
	default: 
		require 'view/404.php';
		break;
}
?>

        