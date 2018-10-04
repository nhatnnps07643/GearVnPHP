<?php
//Tao mang thong tin ve gio hang neu can
if(!isset($_SESSION['cart']))
    $_SESSION['cart']=array();

if(isset($_GET['action']))
    $action=$_GET['action'];
elseif (isset ($_POST['action'])) 
    $action = $_POST['action'];
else
    $action="profile";
switch ($action){
    case "profile":
        include './view/profile.php';
        break;
	default: 
		require 'view/404.php';
		break;
}
?>

        