<?php
//Tao mang thong tin ve gio hang neu can
if(!isset($_SESSION['cart']))
    $_SESSION['cart']=array();

if(isset($_GET['action']))
    $action=$_GET['action'];
elseif (isset ($_POST['action'])) 
    $action = $_POST['action'];
else
    $action="product";
switch ($action){
    case "product":
        include './view/detail.php';
        break;
	default: 
		require 'view/404.php';
		break;
}
?>

        