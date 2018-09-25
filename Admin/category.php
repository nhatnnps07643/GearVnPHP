<?php 
include "admin/template/header.php";
$url = "admin.php?path=category";

?>

	<div class="container mt-5 category">
		<div class="row">
			<div class="col-md-4">
				<h2 class="bg-info btn text-white p-2 h1 ">Thêm Danh Mục</h2>
				<form action="<?=$url?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleFormControlInput1">TÊN DANH MỤC</label>
						<input type="text" name="name" class="name-cata form-control" id="exampleFormControlInput1" placeholder="Tên danh mục">
					</div>
					<div class="form-group mt-3">
						<label for="exampleFormControlFile1">File input</label>
						<input type="file" class="form-control-file" name="image" id="file1">
					</div>
					<div class="group-items">
						<label for="show">Hiển thị lên trang chủ</label>
						<input id="show" name="cb" type="checkbox">
					</div>
					<div class="group-items">
						<button type="submit" name='action' id="add-cate" value="add-category">Thêm</button>
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
				<h2 class="text-white bg-primary btn">Cập Nhật Danh Mục</h2>
				<form action="<?=$url?>" method="POST" enctype="multipart/form-data">
					<div class="form-hidden">
						<input type="hidden" name="hiddenID" value="<?php if(isset($result)) echo $result['id'] ?>" >
						<input type="hidden" name="hiddenIMG" value="<?php if(isset($result)) echo $result['img'] ?>">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"></label>
						<input type="text" name="name" value="<?php if(isset($result)) echo $result['name'] ?>" class="name-cata form-control" id="exampleFormControlInput1" placeholder="Tên danh mục">
					</div>
					<div class="form-group mt-3">
						<label for="exampleFormControlFile1">File input</label>
						<input type="file" class="form-control-file" name="image" id="file2">
					</div>
					<div class="group-items">
						<label for="show">Hiển thị lên trang chủ</label>
						<input id="show" <?php if(isset($result)) if($result['show']==1) echo 'checked' ?> name="cb" type="checkbox">
					</div>
					<div class="group-items">
						<button type="submit" name='action' id="update-cate" value="update-cate">Sửa</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center h2" >Danh sách danh mục</h2>
				<h4 class="alert alert-success">Admin nên chọn tối 8 - 10 sản phẩm được hiển thị trên menu danh mục</h4>
				<h4 class="alert alert-info">Hiện giờ có <?php $count = Category::countCateSelect(); echo $count[0] ?> danh mục được hiển thị</h4>
				<form action="" method="POST">
					<div class="menu-big mb-3 d-flex">
						<div class="btn bg-warning select-all" >Chọn tất cả</div>
						<div class="btn bg-info no-select-all ml-3 " >Bỏ chọn</div>
						<button class="btn btn-primary ml-3 mr-auto" type="submit" name="action" value="delete-multi-cate">Xóa nhiều</button>
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
							<th scope="col">Hiển thị Trang chủ</th>
							<th scope="col">Hình ảnh</th>
							<th scope="col">Thao tác</th>
						</tr>
						</thead>
						<tbody>
						<?php
							if(isset($_POST['name_search']))
							// Nếu có tồn tại cái search
								$result = searchByName($table,$_POST['name_search']);
							else
								$result = getList($table);// goi phuong thuc lay danh sach
							while($set = $result->fetch()){ // duyet danh sach
								echo "<tr>";
								echo "<td> <input type='checkbox' class='chb-cata' name='check[]' value=".$set['id'].">".$set['id']."</td>";
								echo "<td>".$set['name']."</td>";
								if($set['show']==1)
									$show = "Hiển thị";
								else
									$show = "Không hiển thị";
								echo "<td>".$show."</td>";
								echo "<td><img style='max-width: 30px' class='img-fluid' src=".$set['img']."></td>";
								echo "<td> <a class='btn h3 bg-info text-white ' href='$url&action=delete-cate&id=".$set['id']."'>Xóa</a>";
								echo "<a class='btn h3 text-white bg-info ml-3 ' href='$url&action=update-cate-form&id=".$set['id']."'>Sửa</a></td>";
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