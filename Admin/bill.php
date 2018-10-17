<?php 
include "admin/template/header.php";
$url_product = "admin.php?path=guest";
?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
			<div class="jumbotron jumbotron-fluid">
				<div class="container text-center">
				<h1 class="display-4">Danh sách hóa đơn</h1>
				<p class="lead">Nơi kiểm tra các hóa đơn</p>
			</div>
			</div>
				<form action="" method="POST">
					<div class="menu-big mb-3 d-flex">
					<div class="mr-auto"></div>
						<div class="form-inline my-2 my-lg-0">
							<button class="btn btn-outline-success my-2 my-sm-0" id='btn-show-all-bill' value="" type="button">Hiển thị tất cả hóa đơn</button>
							<button class="btn btn-outline-success my-2 my-sm-0 ml-3" id='btn-find' value="" type="button">Lọc hóa đơn chưa giao</button>
   					 	</div>
					</div>
					</div>
					<table class="table table-bordered table-bill">
						<thead class="thead-dark">
						<tr class="">
							<th scope="col">Tên Khách Hàng</th>
							<th scope="col">Địa chỉ</th>
							<th scope="col">Số điện thoại</th>
							<th scope="col">Tổng số tiền</th>
							<th scope="col">Trạng thái</th>
							<th scope="col">Ngày mua</th>
							<th scope="col">Thao tác</th>
							<th scope="col">Xem chi tiết</th>

						</tr>
						</thead>
						<tbody>
						
						</tbody>
					</table>
				</form>
				<nav aria-label="Page navigation bill " style='width: 100%; display: flex'>
					<div class="mr-auto"></div>
					<ul class="pagination" id='pagination_bill'>
						<li class="page-item disabled"><button class="page-link">Previous</button></li>
						<li class='page-item active'><button class='page-link' href='#'>1</button></li>
							<?php
								$count = Bill::count();
								for ($i=2; $i <= $count/10; $i++) { 
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
	</div>
<?php 
include "admin/template/footer.php";
?>