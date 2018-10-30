<?php 
include "admin/template/header.php";
//Đường dẫn tới controller điều khiển
$url_product = "admin.php?path=product";
$count = Product::getCount();
?>
	<div class="container mt-5 product">
		<form action="?path=product" class="row justify-content-center" method="POST" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="form-group">
					<label for="exampleFormControlInput1">TÊN SẢN PHẨM</label>
					<input type="text" name="name" class="name-cata form-control" id="exampleFormControlInput1" placeholder="Tên sản phẩm">
				</div>
				<div class="form-group">
					<label for="decs-prod">MÔ TẢ</label><br>
					<textarea name="decs" id='decs'></textarea>
					<script>
						// CKEDITOR.config.filebrowserImageUploadUrl = './view/Public/img';
						// CKEDITOR.config.extraPlugins = 'uploadimage';
						CKEDITOR.replace( 'decs');
					</script>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="category">DANH MỤC</label> <br>
					<select class='w-100 form-control' name='category' id='category'>
						<?php 
							$listCate = getList('category');
							while($set = $listCate->fetch()){
								echo "<option value='".$set['id']."'>".$set['name']."</option>";
							}
						?>
					</select>
				</div>

				<div class="form-group ">
					<label  for="brand">THƯƠNG HIỆU</label>
					<select class='w-100 form-control' name='brand' id='brand'>
						<?php 
							$listCate = getList('brands');
							while($set = $listCate->fetch()){
								echo "<option value='".$set['id']."'>".$set['name']."</option>";
							}
						?>
					</select>
				</div>

				<div class="form-group ">
					<label  for="stock">SỐ LƯỢNG HÀNG NHẬP</label>
					<input class='w-100 form-control' id="stock" value="100" name="stock" type="number">
				</div>
				<div class="form-group">
					<label  for="guarantee">BẢO HÀNH(THÁNG)</label>
					<input class='form-control' id="guarantee" value="36" name="guarantee" type="number">
				</div>
			
				<div class="form-group ">
					<label for="price-prod">GIÁ TIỀN </label>
					<input type="text" value="0" name="price" class="name-cata form-control" id="price-prod" placeholder="Giá tiền">
				</div>

				<div class="form-group ">
					<label for="sale-prod">GIÁ KHUYẾN MÃI</label>
					<input type="text"  value="0" name="sale" class="name-cata form-control" id="sale-prod" placeholder="Giá khuyến mãi">
				</div>

				<div class="form-group">
					<label for="image">HÌNH ẢNH</label><br>
					<input id="image" class='form-control' name="image" type="file">
				</div>
					
				<div class="form-group">
					<input class='ml-3 mt-3 form-control d-inline' style='width: 30px' id="special" name="special-cb " type="checkbox">
					<label for="special" class='ml-2'>SẢN PHẨM NỔI BẬT</label>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">TAG SEO</label>
					<input type="text" name="tagseo" class="name-cata form-control" id="tagseo" placeholder="Tên tìm kím sản phẩm nhanh">
					<div class='showTagSeo mt-3'>
					<p class='btn btn-info p-1'>TAG DEMO </p> : 
					<p class='btn btn-info p-1'>DEG</p> ,
					</div>
				</div>
			</div>
			<!-- button add -->
			<div class="form-group text-center mt-5">
				<button type="submit" name='action' id="add-prod" class="btn bg-primary h4" value="add-product">Thêm sản phẩm</button>
				<?php if($MESSAGE != ""){
					echo '<div class="alert w-50 alert-primary mt-5" role="alert">';
					echo $MESSAGE ;
					echo '</div>';
					}
				?>
			</div>
			<div class="col-md-2"></div>
		</form>
	</div>


	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center h2" >Danh sách sản phẩm</h2>
				<form action="" method="POST">
					<div class="menu-big mb-3 d-flex">
						<div class="btn bg-warning select-all" >Chọn tất cả</div>
						<div class="btn bg-info no-select-all ml-3 " >Bỏ chọn</div>
						<button class="btn btn-primary ml-3 mr-auto" type="submit" name="action" value="delete-multi-pro">Xóa các mục đã chọn</button>
						<div class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" name= "name_search" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" value="search" type="submit">Search</button>
   					 	</div>
					</div>
				</form>
					
				<div id="listproduct">
				<!-- INCLUDE PRODUCT -->
				</div>
			</div>
			
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center" id='pagination_product'>
					<li class="page-item disabled"><button class="page-link">Previous</button></li>
					<li class='page-item active'><button class='page-link' href='#'>1</button></li>
					<?php
						
						for ($i=2; $i <= $count[0]/10 + 1; $i++) { 
							echo "<li class='page-item'><button class='page-link'>$i</button></li>";
						}
					?>
					<li class="page-item">
					<button class="page-link">Next</button>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<script>
    // window.onload = function() {
    //     CKEDITOR.replace( 'editor' );
    // };
</script>
<?php 
include "admin/template/footer.php";
?>