<?php 
	require 'Admin/template/header.php';
?>
<div class="container mt-5 product">
	<form action="?path=product" class="row justify-content-center" method="POST" enctype="multipart/form-data">
		<div class="col-md-8">
			<div class="form-group">
				<input type="hidden" name="hiddenID" value='<?=$result['id']?>' class="name-cata form-control" >
				<input type="hidden" name="hiddenIMG" value='<?=$result['image']?>' class="name-cata form-control" >
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">TÊN SẢN PHẨM</label>
				<input type="text" name="name" value='<?=$result['name']?>' class="name-cata form-control" id="" placeholder="Tên sản phẩm">
			</div>
			<div class="form-group">
				<label for="decs-prod">MÔ TẢ</label><br>
				<textarea name="decs" id='decs'><?=$result['description']?></textarea>
				<script>
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
						if($result['id_category'] == $set['id'])
							echo "<option selected value='".$set['id']."'>".$set['name']."</option>";
						else
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
				<input type="text" value='<?=$result['price']?>' name="price" class="name-cata form-control" id="price-prod" placeholder="Giá tiền">
			</div>

			<div class="form-group ">
				<label for="sale-prod">GIÁ KHUYẾN MÃI</label>
				<input type="text"  value="0" name="sale" class="name-cata form-control" id="sale-prod" placeholder="Giá khuyến mãi">
			</div>

			<div class="form-group">
				<label for="image">HÌNH ẢNH</label><br>
				<input id="image" class='form-control' name="image" type="file">
				<img style='max-height: 50px; object-fit: cover'  src='<?=$result['image']?>' alt="">
			</div>
				
			<div class="form-group">
				<input id="special" name="special-cb" type="checkbox" <?php if($result['special'] == 1) echo "checked='checked"; ?>>
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
			<div class="form-group">
				<button type="submit" name='action' id="add-prod" class="btn bg-primary text-white" value="update">Cập nhật sản phẩm</button>
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
