<?php 
include "admin/template/header.php";
//Đường dẫn tới controller điều khiển
$url_image = "admin.php?path=image";
?>
	<div class="container mt-5">
		<!-- Phần form cho người dùng nhập -->
		<form method="POST" action="<?=$url_image?>" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="inputEmail3 " class="col-sm-2 col-md-4 col-form-label text-right">Tên sản phẩm</label>
				<div class="col-sm-10 col-md-5">
					<select name="name_product" class='custom-select' id="name_product">
						<?php
							$product = getList('product');
							while($set = $product->fetch()){
								echo "<option value='".$set['id']."'> ".$set['name']."</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3 " class="col-sm-2 col-md-4 col-form-label text-right">Chọn file</label>
				<div class="col-sm-10 col-md-5">
					<input type="file" class="form-control" name="Image" >
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-3">
					<button type="submit" class="btn btn-info" name="action" value="insert">Thêm vào</button>
				</div>
			</div>
		</form>
		<div class="row mt-5">
			<div class="col-md-12">
				<h2 class="text-center h2" >Danh sách Hình Ảnh</h2>

				<form action="<?=$url_image?>" method="post">
					<div class="menu-big mb-3 d-flex">
						<div class="btn bg-warning select-all" >Chọn tất cả</div>
						<div class="btn bg-info no-select-all ml-3 " >Bỏ chọn</div>
						<button class="btn btn-primary ml-3 mr-auto" type="submit" name="action" value="delete-multi">Xóa các mục đã chọn</button>
						<div class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" name="textsearch" type="text" placeholder="Search" >
							<input class='btn btn-outline-success my-2 my-sm-0' value="Search" type='submit' name='action'>
						</div>
					</div>
				
					<table class="table table-bordered">
						<thead class="thead-dark">
						<tr class="">
							<th scope="col">ID</th>
							<th scope="col">ID Sản phẩm</th>
							<th scope="col">Tên sản phẩm</th>
							<th scope="col">Hình</th>
							<th scope="col">Thao tác</th>
						</tr>
						</thead>
						<tbody>
							<?php
								// print_r($result->fetch());
								while ($value = $result->fetch()) {
									$id_product = $value['id_product'];
									$product = getById('product', $id_product);
									echo "<tr class=''>";
									echo "<td> <input type='checkbox' class='chb-cata' name='check[]' value=".$value['id'].">".$value['id']."</td>";
									echo "<td>".$product['id']."</td>";
									echo "<td>".$product["name"]."</td>";
									echo "<td><img style='max-width: 30px' class='img-fluid' src=".$value['link']."></td>";
									echo "<td> <a class='btn h3 bg-info text-white ml-3 ' href='$url_image&action=formUpdate&id=".$value['id']."'>Sửa</a>";
									echo "<a class='btn h3 bg-info text-white ml-3 ' href='$url_image&action=delete&id=".$value['id']."'>Xóa</a> </td>";
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