<?php 
include "admin/template/header.php";
//Đường dẫn tới controller điều khiển
$url_product = "admin.php?path=guest";
?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center h2" >Danh sách sản phẩm</h2>
				<!-- <h4 class="alert alert-success">Admin nên chọn tối 8 - 10 sản phẩm được hiển thị trên menu danh mục</h4>
				<h4 class="alert alert-info">Hiện giờ có <?php $count = Category::countCateSelect(); echo $count[0] ?> danh mục được hiển thị</h4> -->
				<form action="" method="POST">
					
					<div class="menu-big mb-3 d-flex">
						<div class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" name= "name_search" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" value="search" type="submit">Search</button>
						</div>
						<div class="alert alert-info pl-5 pr-5 pt-1 pb-1 m-0 ml-3">Mật khẩu được thay đổi thành 123456789</div>
					</div>
					</div>
					<table class="table table-bordered">
						<thead class="thead-dark">
						<tr class="">
							<th scope="col">ID</th>
							<th scope="col">Tên</th>
							<th scope="col">Email</th>
							<th scope="col">Địa chỉ</th>
							<th scope="col">SDT</th>
							<th scope="col">Hình avatar</th>
							<th scope="col">Thao tác</th>

						</tr>
						</thead>
						<tbody>
						<?php
							if(isset($_POST['name_search']))
							// Nếu có tồn tại cái search
								$result = Guest::searchEmail($_POST['name_search']);
							else
								$result = getList($table);// goi phuong thuc lay danh sach
							while($set = $result->fetch()){ // duyet danh sach
								echo "<tr  class=''>";
								echo "<td> <input type='checkbox' class='chb-cata' name='check[]' value=".$set['id'].">".$set['id']."</td>";
								echo "<td>".$set['name']."</td>";
								echo "<td>".$set['email']."</td>";
								echo "<td>".$set['address']."</td>";
								echo "<td>".$set['number']."</td>";
								echo "<td><img style='max-width: 30px' class='img-fluid' src=".$set['image']."></td>";
								echo "<td> <a class='btn h3 bg-info text-white ml-3 ' href='$url_product&action=reset&id=".$set['id']."'>Reset Password</a>";
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