<!-- <section   class='mt-5'>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="nav nav-header h5 justify-content-center">
					<a class="nav-link ml-4 border border-secondary text-dark" href="#">Active</a>
					<a class="nav-link ml-4 border border-secondary text-dark" href="#">Link</a>
					<a class="nav-link ml-4 border border-secondary text-dark" href="#">Link</a>
					<a class="nav-link ml-4 border border-secondary text-dark" href="#">Disabled</a>
				</nav>
			</div>
		</div>
	</div>
</section> -->
<!-- <div class="container">
	<div class="row">
		<div class="col">
			<nav class="nav nav-pills nav-fill">
				<a class="nav-item nav-link active" href="#">Active</a>
				<a class="nav-item nav-link" href="#">Link</a>
				<a class="nav-item nav-link" href="#">Link</a>
				<a class="nav-item nav-link disabled" href="#">Disabled</a>
			</nav>
		</div>
	</div>
</div> -->
<header class="canhcam-header-2">
        <nav class="navbar navbar-expand-lg container">
            <a class="navbar-brand" href="?home"><img src="./view/Public/img/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CCMenuHeader" aria-controls="CCMenuHeader" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <div class="collapse navbar-collapse" id="CCMenuHeader">
                
                <!-- <div class="user dropdown" style=" display: <?php if(isset($_SESSION['user'])) echo "flex"; else echo "none" ?> ">
                    <a class="nav-link" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <div class="box-img"><img src="./view/Public/img/avatar.jpg" alt=""></div>
                    </a>
					<a class="nav-link" href="#"><i class="fas fa-user-alt"></i>Thông tin</a>
					<a class="logout nav-link" href="index.php?logout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
				</div>
				<div class="guest" style=" display: <?php if(isset($_SESSION['user'])) echo "none";  else echo "block"  ?> ">
					<ul class="navbar-nav">
						<li class="nav-item"><a><a class="nav-link" href="index.php?login"><i class="fas fa-user-astronaut"></i>Đăng nhập
							<div class="element-temp"></div></a></a>
						</li>
						<li class="nav-item"><a><a class="nav-link" href="#"><i class="fas fa-users"></i>Đăng kí
							<div class="element-temp"></div></a></a>
						</li>
					</ul>
				</div> -->
			</div>
		</nav>
		<ul class="p-0 d-flex nav-menu justify-content-around bg-dark">
			<li class="nav-item btn active-header"><a class="text-white h5" href="?path=category">Quản lí danh mục</a></li>
			<li class="nav-item btn"><a class="text-white" href="?path=product">Quản lí sản phẩm</a></li>
			<li class="nav-item btn"><a class="text-white" href="?path=brand">Quản lí thương hiệu</a></li>
			<li class="nav-item btn"><a class="text-white" href="?path='user">Quản lí người dùng</a></li>
			<li class="nav-item btn"><a class="text-white" href="?path='image">Quản lí hình ảnh</a></li>
			<li class="nav-item btn"><a class="text-white" href="?path='bill">Quản lí hóa đơn</a></li>
			<li class="nav-item btn"><a class="text-white" href="?path='bill">Quản lí bình luận</a></li>
		</ul>
    </header>