<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no"><!-- ////////////// Mobile title color ////////////// -->
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <title>index - DEMO SITE</title><!-- ////////////// CSS Include ////////////// -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./view/Public/css/core.css">
    <link rel="stylesheet" href="./view/Public/css/plugins.css">
    <link rel="stylesheet" href="./view/Public/css/main.css">
    <!-- endinject --><!-- ////////////// FAVICON ////////////// -->
  </head>
  <body class="canhcam-develop canhcam-index-page" id="top-page">
    <div id="fb-root"></div><!-- ////////////// Header ////////////// -->
    <header class="canhcam-header-2">
      <nav class="navbar navbar-expand-lg container"><a class="navbar-brand" href="index.php"><img src="./view/Public/img/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CCMenuHeader" aria-controls="CCMenuHeader" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
        <div class="collapse navbar-collapse" id="CCMenuHeader">
          <div class="mr-auto"></div>
          <ul class="navbar-nav menu-nav mt-2 mt-lg-0 mr-auto">
            <li class="nav-item active"><a class="nav-link" href="#">Trang chủ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Về chúng tôi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
          </ul>
		  
		  <form action="index.php?path=product" method='POST'>
			<div class="group input-group mr-3">
				<input class="form-control" placeholder ="search"  name='txtSearch' type="search">
				<button class="btn" type="submit"  name='action' value='search' >Search</button>
			</div>
		  </form>
          <a href="?path=product&action=cart">
		  	<button type="button" class="btn btn-info mr-2">
				Giỏ hàng <span class="badge badge-light">
				<?php 
				if(isset($_SESSION['count'])){
					echo sizeof($_SESSION['count']);
				}
				else{
					echo 0;
				}
				?>
				</span>
			</button>
		  </a>
          <div class="user dropdown"><a class="nav-link" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              <div class="box-img"><img src="./view/Public/img/avatar.jpg" alt=""></div></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#"><i class="fas fa-user-alt"></i>Thông tin</a><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></div>
          </div>
        </div>
      </nav>
    </header>