<?php 
include "admin/template/header.php";
//Đường dẫn tới controller điều khiển
$url_product = "admin.php?path=product";
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
					<textarea name="decs" id="" rows="5" style="width: 100%"></textarea>
				</div>

			</div>
			<div class="col-md-8">
				<div class="row ">
					<div class="col-md-6">
						<div class="form-group ">
							<label for="price-prod">GIÁ TIỀN </label>
							<input type="text" value="0" name="price" class="name-cata form-control" id="price-prod" placeholder="Giá tiền">
						</div>
						<div class="form-group">
							<label for="image">HÌNH ẢNH</label><br>
							<input id="image" name="image" type="file">
						</div>
						<div class="form-group">
							<input id="special" name="special-cb" type="checkbox">
							<label for="special" class='ml-2'>SẢN PHẨM NỔI BẬT</label>
							
						</div>
						<div class="form-group">
							<label for="category">DANH MỤC</label>
							<select name='category' id='category'>
								<?php 
									$listCate = getList('category');
									while($set = $listCate->fetch()){
										echo "<option value='".$set['id']."'>".$set['name']."</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group ">
							<label for="sale-prod">GIÁ KHUYẾN MÃI</label>
							<input type="text"  value="0" name="sale" class="name-cata form-control" id="sale-prod" placeholder="Giá khuyến mãi">
						</div>
						<div class="form-group">
							<label for="stock">SỐ LƯỢNG HÀNG HÓA</label>
							<input id="stock" value="100" name="stock" type="number">
							<br>
							<label for="guarantee">BẢO HÀNH(THÁNG)</label>
							<input id="guarantee" value="36" name="guarantee" type="number">
						</div>
						<div class="form-group">
							<label for="brand">THƯƠNG HIỆU</label>
							<select name='brand' id='brand'>
								<?php 
									$listCate = getList('brands');
									while($set = $listCate->fetch()){
										echo "<option value='".$set['id']."'>".$set['name']."</option>";
									}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name='action' id="add-prod" class="btn bg-primary h4" value="add-product">Thêm sản phẩm</button>
					<?php if($MESSAGE != ""){
						echo '<div class="alert w-50 alert-primary mt-5" role="alert">';
						echo $MESSAGE ;
						echo '</div>';
					}
				?>
				</div>
			</div>
		</form>
	</div>


	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center h2" >Danh sách sản phẩm</h2>
				<!-- <h4 class="alert alert-success">Admin nên chọn tối 8 - 10 sản phẩm được hiển thị trên menu danh mục</h4>
				<h4 class="alert alert-info">Hiện giờ có <?php $count = Category::countCateSelect(); echo $count[0] ?> danh mục được hiển thị</h4> -->
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
					</div>
					<table class="table table-bordered">
						<thead class="thead-dark">
						<tr class="">
							<th scope="col">ID</th>
							<th scope="col">Tên</th>
							<th scope="col">Giá niêm iết</th>
							<th scope="col">Giá bán</th>
							<th scope="col">Ngày tạo</th>
							<th scope="col">Kho</th>
							<th scope="col">Hình chính</th>
							<th scope="col">Thao tác</th>

						</tr>
						</thead>
						<tbody>
						<?php
							if(isset($_REQUEST['name_search'])){
								$result = searchByName($table,$_REQUEST['name_search']);
								echo "homi";
							}
							else
								$result = getList($table);// goi phuong thuc lay danh sach
							while($set = $result->fetch()){ // duyet danh sach
								echo "<tr  class=''>";
								echo "<td> <input type='checkbox' class='chb-cata' name='check[]' value=".$set['id'].">".$set['id']."</td>";
								echo "<td>".$set['name']."</td>";
								echo "<td>".$set['price']."</td>";
								echo "<td>".$set['sale']."</td>";
								echo "<td>".$set['date_created']."</td>";
								echo "<td>".$set['stock']."</td>";
								echo "<td><img style='max-width: 30px' class='img-fluid' src=".$set['image']."></td>";
								echo "<td> <a class='btn h3 bg-info text-white ml-3 ' href='$url_product&action=delete&id=".$set['id']."'>Xóa</a>";
								echo "<a class='btn h3 text-white bg-info ml-3 ' href='$url_product&action=form-update&id=".$set['id']."'>Sửa</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php 
include "admin/template/footer.php";
?>