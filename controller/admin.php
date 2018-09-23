<?php
	//Gọi đến model
	require 'model/connect.php';
	require 'model/category.php';
	require 'model/product.php';

	//Biến gởi tin nhắn ra màng hình
	$MESSAGE = "";
	if(isset($_GET['action']))
	$action=$_GET['action'];
	elseif (isset ($_POST['action'])) 
	$action = $_POST['action'];
	else
	$action="admin";

	//Gọi đến admin controller
	require 'controller/admin/managerCate.php';
	// require 'controller/admin/managerProd.php';


?>
