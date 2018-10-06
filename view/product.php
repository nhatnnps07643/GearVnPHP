<?php require 'view/Layout/header.php' ;
	$route = "index.php?path=product";
?>
<main>
<section class="content-c1 pt-3 pb-3">
	<div class="container">
		<div class="row">
		<div class="col-md-9 order-md-last">
			<div class="owl-carousel owl-theme list-item shadow">
			<div class="item" bg-img-responsive="./view/Public/img/banner-2.jpg" bg-img-responsive-sm="./view/Public/img/banner-2.jpg" bg-img-responsive-xs="./view/Public/img/banner-2.jpg"></div>
			<div class="item" bg-img-responsive="./view/Public/img/banner-3.jpg" bg-img-responsive-sm="./view/Public/img/banner-3.jpg" bg-img-responsive-xs="./view/Public/img/banner-3.jpg"></div>
			<div class="item" bg-img-responsive="./view/Public/img/banner-4.jpg" bg-img-responsive-sm="./view/Public/img/banner-4.jpg" bg-img-responsive-xs="./view/Public/img/banner-4.jpg"></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="nav-category shadow mt-3 mt-md-0">
			<div class="title">
				<h3 class="text-center">DANH MỤC</h3>
			</div>
			<div class="list-items">
			<?php 
				$resutl = getList('category');
				foreach ($resutl as  $value) {
					extract($value);
					echo 
					"<a href='$route&id=$id'>
					<div class='element ml-4 d-flex'>
					<img class='img-fluid' src='$img' alt=>
					<h3> $name </h3>
					</div></a>"
					;
				}
			?>
			</div>
			</div>
		</div>
		</div>
	</div>
</section>

<section class="content-c2">
        <div class="container">
          <div class="row">
		
            <div class="col-md-12">
              <div class="title mt-2 title-main">
                <h2>SẢN PHẨM</h2>
                <p class="text-center">Sản phẩm của GEARVN</p>
              </div>
			  <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="mr-auto"></div>
				<form action="<?=$route?>" method='POST' class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" name='txtSearch' type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" name='action' value='search' type="submit">Search</button>
				</form>
			</nav>
            </div>
			<!-- SẢN PHẨM MỚI -->
			<?php 
				foreach ($result as $value) {
					extract($value);
					echo "<div class='item col-md-3 mt-5 border'><a href='$route&action=detail&id=$id'>
					<figure class='shadow-sm'>
						<div class='boximg bg-white'><img src='$image' alt=''>
							<div class='combo-icon'>
								<a class='element-icon bg-info' href='$route&action=add&id=$id'><i class='fas fa-cart-plus text-white'></i></a>
								<a class='element-icon bg-info' href='#'><i class='far fa-eye text-white'></i></a>
								<a class='element-icon icon-view bg-info text-white' href=''><i class='far text-white fa-credit-card'></i>$purchases</a>
							</div>
						</div>
						<figcaption>
							<h3>$name</h3>
							<div class='price mt-3'>$price đ</div>
						</figcaption>
					</figure></a></div>";
				}
			?>
			<!-- KẾT THÚC -->
          </div>
        </div>
      </section>
</main>
<?php require 'view/Layout/footer.php' ?>