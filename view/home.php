<?php include "./view/Layout/header.php";
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
              <div class="nav-category shadow mt-3 mt-md-0" style='overflow:hidden'>
                <div class="title">
                  <h3 class="text-center">DANH MỤC</h3>
                </div>
                <div class="list-items">
				<?php 
					$resutl = getList('category');
					foreach ($resutl as  $value) {
						extract($value);
						echo 
						"<a href='$route&id=$id' style='border-bottom: 1px solid black;text-decoration: none'>
						<div class='element pl-4 d-flex' style='margin: .25rem 0 ; background: #fab3239c'>
						<img class='img-fluid' src='$img' alt='' style='width: 35px; height: 35px; object-fit:cover'>
						<h3 style=' margin: 0;line-height: 42px; color:black; text-decoration: none'> $name </h3>
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
	<!-- Phần xử lí php -->
	 
	<!-- kết thúc -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title mt-5 title-main">
                <h2>SẢN PHẨM NỔI BẬT</h2>
                <p class="text-center">Các sản phẩm nổi bật đáng chú ý trong tháng</p>
              </div>
            </div>
			<?php 
				$result = Product::getProductSpecial(8);
				foreach ($result as $value) {
					extract($value);
					echo "<div class='item col-md-3 mt-5 border'><a href='$route&action=detail&id=$id'>
					<figure class='shadow-sm'>
						<div class='boximg bg-white'><img src='$image' alt=''>
							<div class='combo-icon'>
								<a class='element-icon bg-info' href='$route&action=add&id=$id'><i class='fas fa-cart-plus text-white'></i></a>
								<a class='element-icon icon-view bg-info text-white' href='#'>$purchases lượt mua</a>
							</div>
						</div>
						<figcaption>
							<h3>$name</h3>
							<div class='price mt-3'>".number_format($price)." VNĐ</div>
						</figcaption>
					</figure></a></div>";
				}
			?>
        </div>
      </section>
      <section class="content-c2">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="title mt-5 title-main">
                <h2>SẢN phẩm MỚI</h2>
                <p class="text-center">Các sản phẩm MỚI nhập hàng</p>
              </div>
            </div>
			<!-- SẢN PHẨM MỚI -->
			<?php 
				$result1 = Product::getProductNew(8);
				foreach ($result1 as $value) {
					extract($value);
					echo "<div class='item col-md-3 mt-5 border'><a href='?path=product&action=detail&id=$id'>
					<figure class='shadow-sm'>
						<div class='boximg bg-white'><img src='$image' alt=''>
							<div class='combo-icon'>
								<a class='element-icon bg-info' href='$route&action=add&id=$id'><i class='fas fa-cart-plus text-white'></i></a>
								<a class='element-icon icon-view bg-info text-white' href='#'>$purchases lượt mua</a>
							</div>
						</div>
						<figcaption>
							<h3>$name</h3>
							<div class='price mt-3'>".number_format($price)." VNĐ</div>
						</figcaption>
					</figure></a></div>";
				}
			?>
			<!-- KẾT THÚC -->
          </div>
        </div>
      </section>
	  <section class='banner-center'>
		<img style='width: 100%; max-height: 300px; object-fit: cover ' src="./view/Public/img/ryzen_banner.jpg" alt="ádas">
	  </section>
      <section class="content-c2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title mt-5 title-main">
                <h2>SẢN PHẨM NHIỀU LƯỢT MUA</h2>
                <p class="text-center">Các sản phẩm nhiều lượt xem trong tháng</p>
              </div>
            </div>
            <!-- SẢN PHẨM NHIỀU LƯỢT MUA -->
			<?php 
				$result2 = Product::getProductPurchases(8);
				foreach ($result2 as $value) {
					extract($value);
					echo "<div class='item col-md-3 mt-5 border'><a href='?path=product&action=detail&id=$id'>
					<figure class='shadow-sm'>
						<div class='boximg bg-white'><img src='$image' alt=''>
							<div class='combo-icon'>
								<a class='element-icon bg-info' href='$route&action=add&id=$id'><i class='fas fa-cart-plus text-white'></i></a>
								<a class='element-icon icon-view bg-info text-white' href='#'>$purchases lượt mua</a>
							</div>
						</div>
						<figcaption>
							<h3>$name</h3>
							<div class='price mt-3'>".number_format($price)." VNĐ</div>
						</figcaption>
					</figure></a></div>";
				}
			?>
			<!-- KẾT THÚC -->
          </div>
        </div>
      </section>
    </main><!-- ////////////// End Main ////////////// -->
<?php include "./view/layout/footer.php" ?>