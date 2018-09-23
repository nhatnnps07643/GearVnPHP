<?php 
	session_start();
	// Điều khiển xử lí
	if(!isset($_SESSION['cart']))
    $_SESSION['cart']=array();
	if(isset($_GET['action']))
		$action=$_GET['action'];
	elseif (isset ($_POST['action'])) 
		$action = $_POST['action'];
	else
		$action="home";
	

	require 'model/connect.php';
	require 'controller/controller.php';
	require 'controller/user.php';

	
	require $View_name;

?>