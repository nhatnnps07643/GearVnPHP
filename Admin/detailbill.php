<?php 
    include "admin/template/header.php";
    $url = "admin.php?path=category";
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
        <h1 class="display-4">Hóa đơn chi tiết</h1>
        <p class="lead">Các sản phẩm có trong hóa đơn</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-bill">
                    <thead class="thead-dark">
                    <tr  class="">
                        <th style='font-weight: 500' scope="col">Tên sản phẩm</th>
                        <th style='font-weight: 500' scope="col">Số lượng</th>
                        <th style='font-weight: 500' scope="col">Giá tiền</th>
                        <th style='font-weight: 500' scope="col">Tổng số tiền</th>
                        <th style='font-weight: 500' scope="col">Hinh Anh</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php 
                        foreach ($result as $value) {
							extract($value);
                           	echo "<tr  class=''>
									<th style='font-weight: 400' scope='col'>$name</th>
									<th style='font-weight: 400' scope='col'>$count</th>
									<th style='font-weight: 400' scope='col'>".number_format($price)."</th>
									<th style='font-weight: 400' scope='col'>".number_format($price * $count)."</th>
									<th style='font-weight: 400' scope='col'><img style='width: 50px; ' src='$image'></th>
								</tr>";
                        }
                    ?>
                        
                    </tbody>
                </table>
				<div class="d-flex w-100">
						<div class="mr-auto"></div>
						<div><a href='?path=bill' class='btn btn-success text-dark'>Quay lại</a></div>
				</div>
            </div>
        </div>
    </div>

<?php 
    include "admin/template/footer.php";
    $url = "admin.php?path=category";
?>