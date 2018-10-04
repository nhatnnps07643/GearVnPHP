<?php
//Tao mang thong tin ve gio hang neu can
if(!isset($_SESSION['cart']))
    $_SESSION['cart']=array();

if(isset($_GET['action']))
    $action=$_GET['action'];
elseif (isset ($_POST['action'])) 
    $action = $_POST['action'];
else
    $action="login";
switch ($action){
    case "login":
        include './view/login.php';
        break;
    case "register":
        include './view/register.php';
        break;
	default: 
		require 'view/404.php';
		break;
}
?>

        