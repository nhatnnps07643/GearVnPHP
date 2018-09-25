<?php 
	require 'Admin/template/header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-12 mt-5">
			<form action="?path=product" class="row justify-content-center" method="POST" enctype="multipart/form-data">
				<div class="col-md-8">
					<div class="form-group">
						<input type="hidden" name="hiddenID" value='<?=$result['id']?>' class="name-cata form-control" >
						<input type="hidden" name="hiddenIMG" value='<?=$result['image']?>' class="name-cata form-control" >
					</div>
					<div class="form-group">
						<label for="name">TÊN SẢN PHẨM</label>
						<input type="text" name="name" value='<?=$result['name']?>' class="name-cata form-control" id="name" placeholder="Tên sản phẩm">
					</div>
					<div class="form-group">
						<label for="decs-prod">MÔ TẢ</label><br>
						<textarea name="decs"  id="" rows="5" style="width: 100%"><?=$result['description']?></textarea>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row ">
						<div class="col-md-6">
							<div class="form-group ">
								<label for="price-prod">GIÁ TIỀN </label>
								<input type="text" value='<?=$result['price']?>' name="price" class="name-cata form-control" id="" placeholder="Giá tiền">
							</div>
							<div class="form-group">
								<label for="image">HÌNH ẢNH</label><br>
								<input id="image" name="image" type="file1">
								<img class="img-fluid" src='<?=$result['image']?>' alt="Hình đã bị xóa">
							</div>
							<div class="form-group">
								<input id="special" name="special-cb" type="checkbox" <?php if($result['special'] == 1) echo "checked='checked"; ?>>
								<label for="special"  class='ml-2'>SẢN PHẨM NỔI BẬT</label>
								
							</div>
							<div class="form-group">
								<label for="category">DANH MỤC</label>
								<select name='category' id='category'>
									<?php 
										$listCate = getList($table);
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
								<input type="text" name="sale" class="name-cata form-control" id="sale-prod" placeholder="Giá khuyến mãi">
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
										$listCate = getList($table);
										while($set = $listCate->fetch()){
											echo "<option value='".$set['id']."'>".$set['name']."</option>";
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name='action' id="add-prod" class="btn bg-primary text-white" value="update">Cập nhật sản phẩm</button>
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
	</div>
</div>