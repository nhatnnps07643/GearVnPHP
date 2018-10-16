<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="./view/Public/css/main.css">
	<link rel="stylesheet" href="./admin/public/css/add.css">
</head>
<body>
<header class="canhcam-header-2 d-block">
	<nav class="navbar navbar-expand-lg container">
		<a class="navbar-brand" href=""><img src="./view/Public/img/logo.png" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CCMenuHeader" aria-controls="CCMenuHeader" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
		<div class="collapse navbar-collapse" id="CCMenuHeader">
			<div class="user dropdown" style=" display: <?php if(isset($_SESSION['admin'])) echo "flex"; else echo "none" ?> ">
				<a class="nav-link" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
					<div class="box-img"><img src="./view/Public/img/avatar.jpg" alt=""></div>
				</a>
				<a class="nav-link" href="#"><i class="fas fa-user-alt"></i>Thông tin</a>
				<a class="logout nav-link" href="index.php?logout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
			</div>
		</div>
	</nav>
	<ul class="p-0 d-flex nav-menu justify-content-around bg-dark">
		<li class="nav-item btn active-header"><a class="text-white h5" href="?path=category">Quản lí danh mục</a></li>
		<li class="nav-item btn"><a class="text-white" href="?path=product">Quản lí sản phẩm</a></li>
		<li class="nav-item btn"><a class="text-white" href="?path=brands">Quản lí thương hiệu</a></li>
		<li class="nav-item btn"><a class="text-white" href="?path=guest">Quản lí người dùng</a></li>
		<li class="nav-item btn"><a class="text-white" href="?path=image">Quản lí hình ảnh</a></li>
		<li class="nav-item btn"><a class="text-white" href="?path=bill">Quản lí hóa đơn</a></li>
		<li class="nav-item btn"><a class="text-white" href="?path=bill">Quản lí bình luận</a></li>
	</ul>
</header>
<div style="height: 100px"></div>