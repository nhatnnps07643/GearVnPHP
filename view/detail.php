<?php require 'view/Layout/header.php';


?>
    <!-- ////////////// End Header ////////////// -->
    <!-- ////////////// Begin Main ////////////// -->
    <main>
        <section class="detail">
            <article class="product-details">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-5 order-md-2 mb-4 infomation">
                            <h1><?=$result['name']?></h1>
                            <div class="all-price"><span class="price"><?=$result['price']?></span></div>
                            <hr>
                            <div class="html">Nike Golf Shirt with zip-up collar up to the chin in Dri-FIT sweat-wicking fabric Stretch inserts Contrasting details Body: Dri-FIT 100% polyester Upper body: 90% polyester, 10% elastane Machine washable</div>
                            <hr>
                            <h3 class="h3 mt-3">BẢO HÀNH
                                <p class="mt-3">Thời gian: <?=$result['guarantee']?> Tháng</p>
                            </h3>
                            <h3 class="h3 mt-3">QUANTITY</h3>
                            <div class="form-inline" id="quantity">
                                <div class="form-group">
                                    <input value="1">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <a href='<?="$route&action=add&id=".$result['id']?>' class="btn btn-primary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 order-md-1 slider-img shadow-lg">
                            <article class="slider-for owl-carousel owl-theme list-items">
                                <div class="item p-5" data-hash="data-g-1"><img style='max-height: 360px; object-fit : contain' src="<?=$result['image']?>" alt=""></div>
								<?php 
									foreach ($arrayimg as $key => $value) {
										extract($value);
										$key = $key + 2;
										echo "<div class='item' data-hash='data-g-$key'><img style='max-height: 360px ; object-fit : contain' src='$link' alt=''></div>";
									}
								?>
                            </article>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="detail-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h2 class="font-weight-bold h2">Thông tin chi tiết</h2>
                        </div>
                        <div class="tag-info">
                            <p>Nội dung</p>
							<div class="h4" style='min-height: 500px'>
							<?=$result['description']?>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 bor-left">
                        <div class="title">
                            <h2 class="font-weight-bold h2">Đánh giá và Bình luận</h2>
                            <form class="tag-comment" action="" method='POST'>
                                <div class="group-start">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                </div>
								<input type="hidden" name='hideID' value="<?=$result['id']?>"/>
								<input type="hidden" name='hideID' value="<?=$result['id']?>"/>
                                <div class="group-content">
                                    <textarea name="content"  style="width :100%" rows="4"></textarea>
                                </div>
                                <div class="group-submit">
                                    <button type="submit" <?php if(!isset($_SESSION['user'])) echo 'disabled'; ?> name='action' value="comment">Bình Luận</button>
                                </div>
                            </form>
                            <div class="tag-show-comment">
								<?php 
									foreach ($comment as $key => $value) {
										extract($value);
										$user = getById('guest', $id_guest);
										$avatar = $user['image'];
										$name = $user['name'];
										echo "<div class='user'>
												<figure><img src='$avatar' alt='>
													<p class='mb-0'>$name</p>
													<figcaption>
														<p>$content</p>
													</figcaption>
												</figure>
											</div>";
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-3">
            <article class="product-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title mt-5 title-main">
                                <h2>SẢN PHẨM CÙNG DANH MỤC</h2>
                            </div>
                            <div class="list-items owl-carousel owl-theme mt-3">
                                <div class="item-product">
                                    <a href="#">
                                        <figure>
                                            <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                                                <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                                            </div>
                                            <figcaption>
                                                <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                                                <div class="price">15.000.00 đ</div>
                                                <div class="btn btn-more">Mua hàng</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="item-product">
                                    <a href="#">
                                        <figure>
                                            <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                                                <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                                            </div>
                                            <figcaption>
                                                <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                                                <div class="price">15.000.00 đ</div>
                                                <div class="btn btn-more">Mua hàng</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="item-product">
                                    <a href="#">
                                        <figure>
                                            <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                                                <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                                            </div>
                                            <figcaption>
                                                <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                                                <div class="price">15.000.00 đ</div>
                                                <div class="btn btn-more">Mua hàng</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="item-product">
                                    <a href="#">
                                        <figure>
                                            <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                                                <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                                            </div>
                                            <figcaption>
                                                <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                                                <div class="price">15.000.00 đ</div>
                                                <div class="btn btn-more">Mua hàng</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="item-product">
                                    <a href="#">
                                        <figure>
                                            <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                                                <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                                            </div>
                                            <figcaption>
                                                <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                                                <div class="price">15.000.00 đ</div>
                                                <div class="btn btn-more">Mua hàng</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="item-product">
                                    <a href="#">
                                        <figure>
                                            <div class="boximg"><img src="./view/Public/img/product/main-1.png" alt="">
                                                <div class="combo-icon"><a class="element-icon" href="#"><i class="fas fa-cart-plus"></i></a><a class="element-icon" href="#"><i class="far fa-eye"></i></a><a class="element-icon icon-view" href="#"><i class="far fa-credit-card"></i>200</a></div>
                                            </div>
                                            <figcaption>
                                                <h3>Mainboard Asrock H110M-DVS LGA 1151</h3>
                                                <div class="price">15.000.00 đ</div>
                                                <div class="btn btn-more">Mua hàng</div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- ////////////// End Main ////////////// -->
    <!-- ////////////// Footer ////////////// -->
	<?php require 'view/Layout/footer.php' ?>