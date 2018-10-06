<?php require 'view/Layout/header.php';
?>
    <!-- ////////////// End Header ////////////// -->
    <!-- ////////////// Begin Main ////////////// -->
    <main>
        <section class="cart">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="./view/Public/img/banner_cart.png" style='width: 100%;max-height: 300px; object-fit: cover' alt="">
					</div>
					<div class="col-md-12">
						<table class="table mt-5">
							<thead class="thead-dark">
								<tr>
								<th scope="col">Tên sản phẩm</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Giá tiền</th>
								<th scope="col">Hình</th>
								<th scope="col">Xóa</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								foreach ($_SESSION['cart'] as $key => $value) {
									$arrPro = getById('product', $value );
									extract($arrPro);
									$pricePro = $price* $_SESSION['count'][$key];
									echo "<tr>
											<th scope='row'>$name</th>
											<td>
												<input min=0 max=100 data-input='$id' class='textCount' style='max-width: 70px; text-align: left; padding-left: 20px' type='number' value='". $_SESSION['count'][$key] ."'>
											</td>
											<input type='hidden' class='oneprice'  value='$price'></input>
											<td class='price'>".
												number_format($pricePro)
											."</td>
											<td><img style='max-height: 50px; object-fit: contain' src='$image' alt='$image'></td>
											<td>
											<a href='$route&action=deleteOne&id=$id'><i class='fas fa-trash-alt'></i></a>
											</td>
										</tr>";
								}
							?>
							</tbody>
						</table>
						<div class="d-flex">
								<div class="mr-auto"></div>
								<div class=" ">
									<label for="total" class="h4">Tổng tiền  :</label>
									<span for="" id='total' class=" btn bg-warning"> </span>
								</div>
						</div>
					</div>
					
	
					<div class="col-md-12 d-flex mt-3">
						<div class="mr-auto"></div>
							<a href="<?=$route?>&action=contactpay" class="btn bg-info text-white">Thanh toán</a>
					</div>

				</div>
			</div>
        </section>
    </main>
    <!-- ////////////// End Main ////////////// -->
    <!-- ////////////// Footer ////////////// -->
	<?php require 'view/Layout/footer.php' ?>