<?php
	if(isset($_POST['Login'])){
		$_SESSION['user'] = 1;
		require './view/home.php';
	}
	if(Exit_params("logout")){
		unset($_SESSION['user']);
		$View_name = "./view/home.php";
	}
?>