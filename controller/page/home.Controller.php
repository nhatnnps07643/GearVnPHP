<?php
//Tao mang thong tin ve gio hang neu can
$table = 'product';
$route = 'index.php';
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