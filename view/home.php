<?php include "./view/Layout/header.php" ?>
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
						"<a href='$route?patch=product&id=$id'>
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
			$result = Product::getProductBySpecial(8);
			foreach ($result as $value) {
				extract($value);
				echo "<div class='item col-md-3 mt-5 border'><a href='?path=product&id=$id'>
                <figure class='shadow-sm'>
                  	<div class='boximg bg-white'><img src='$image' alt=''>
						<div class='combo-icon'>
							<a class='element-icon bg-info' href='#'><i class='fas fa-cart-plus text-white'></i></a>
							<a class='element-icon bg-info' href='#'><i class='far fa-eye text-white'></i></a>
							<a class='element-icon icon-view bg-info text-white' href='#'><i class='far text-white fa-credit-card'></i>200</a>
						</div>
                	</div>
                 	 <figcaption>
						<h3>$name</h3>
						<div class='price mt-3'>$price</div>
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
                <h2>SẢN phẩm HÓT</h2>
                <p class="text-center">Các sản phẩm HOT đáng chú ý trong tháng</p>
              </div>
            </div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
          </div>
        </div>
      </section>
      <section class="content-c2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title mt-5 title-main">
                <h2>SẢN PHẨM NHIỀU LƯỢT XEM</h2>
                <p class="text-center">Các sản phẩm nhiều lượt xem trong tháng</p>
              </div>
            </div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
            <div class="item col-md-3 mt-5"><a href="#">
                <figure class="shadow-sm">
                  <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                    <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                  </div>
                  <figcaption>
                    <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                    <div class="price mt-3">15.000.00 đ</div>
                  </figcaption>
                </figure></a></div>
          </div>
        </div>
      </section>
    </main><!-- ////////////// End Main ////////////// -->
<?php include "./view/layout/footer.php" ?>