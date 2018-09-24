<?php 
include "admin/header.php";
$url = "admin.php?path=brands";

?>

	<div class="container mt-5 category">
		<div class="row">
			<div class="col-md-4">
				<h2 class="bg-info btn text-white p-2 h1 ">Thêm Thương Hiệu</h2>
				<form action="<?=$url?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleFormControlInput1">TÊN THƯƠNG HIỆU</label>
						<input type="text" name="name" class="name-cata form-control" id="exampleFormControlInput1" placeholder="Tên danh mục">
					</div>
					<div class="form-group mt-3">
						<label for="exampleFormControlFile1">FILE INPUT</label>
						<input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
					</div>
					<div class="form-group">
						<button type="submit" name='action' id="add" value="add">Thêm</button>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<?php if($MESSAGE != ""){
					echo '<div class="alert w-50 alert-primary mt-5" role="alert">';
					echo $MESSAGE ;
					echo '</div>';
				}
				?>
			</div>
			
			<div class="col-md-4">
				<h2 class="text-white bg-primary btn">CẬP NHẬT THƯƠNG HIỆU</h2>
				<form action="<?=$url?>" method="POST" enctype="multipart/form-data">
					<div class="form-hidden">
						<input type="hidden" name="hiddenID" value="<?php if(isset($result)) echo $result['id'] ?>" >
						<input type="hidden" name="hiddenIMG" value="<?php if(isset($result)) echo $result['image'] ?>" >
					</div>
					<div class="form-group">
						<label for="name">TÊN THƯƠNG HIỆU</label>
						<input type="text" name="name" value="<?php if(isset($result)) echo $result['name'] ?>" class="name-cata form-control" id="name" placeholder="Tên danh mục">
					</div>
					<div class="form-group mt-3">
						<label for="file">FILE INPUT</label>
						<input type="file" class="form-control-file" name="image" id="file">
						<img src="<?php if(isset($result)) echo $result['image'] ?>" class="img-fluid" alt="">
					</div>
					<div class="form-group">
						<button type="submit" name='action' id="update" value="update">SỬA</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="alert alert-success text-center">DANH SÁCH THƯƠNG HIỆU</h4>
				<form action="<?=$url?>" method="POST">
					<div class="menu-big mb-3 d-flex">
						<div class="btn bg-warning select-all" >Chọn tất cả</div>
						<div class="btn bg-info no-select-all ml-3" >Bỏ chọn</div>
						<button class="btn btn-primary mr-auto ml-3" type="submit" name="action" value="delete-multi">Xóa các mục đã ch</button>
						<div class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" name= "name_search" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" value="search" type="submit">Search</button>
   					 	</div>
					</div>
					
					<table class="table table-bordered">
						<thead class="thead-dark">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Tên</th>
							<th scope="col">Hình ảnh</th>
							<th scope="col">Thao tác</th>
						</tr>
						</thead>
						<tbody>
						<?php
							if(isset($_POST['name_search']))
								// Nếu có tồn tại cái search
								$result = Brands::searchByName($_POST['name_search']);

							else
								$result = Brands::getList();
							while($set = $result->fetch()){ 
								echo "<tr>";
								echo "<td> <input type='checkbox' class='chb-cata' name='check[]' value=".$set['id'].">".$set['id']."</td>";
								echo "<td>".$set['name']."</td>";
								echo "<td><img style='max-width: 30px' class='img-fluid' src=".$set['image']."></td>";
								echo "<td> <a class='btn h3 bg-info text-white ' href='$url&action=delete&id=".$set['id']."'>Xóa</a>";
								echo "<a class='btn h3 text-white bg-info ml-3 ' href='$url&action=update-form&id=".$set['id']."'>Sửa</a></td>";
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
include "admin/footer.php";
?>