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
                        <th style='font-weight: 500' scope="col">Trạng thái</th>
                        <th style='font-weight: 500' scope="col">Ngày mua</th>
                        <th style='font-weight: 500' scope="col">Thao tác</th>
                        <th style='font-weight: 500' scope="col">Xem chi tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    print_r($result);
                        // foreach ($result as $value) {
                        //    print_r($value);
                        // }
                    ?>
                        <tr  class="">
                            <th style='font-weight: 400' scope="col">Tên Khách Hàng</th>
                            <th style='font-weight: 400' scope="col">Địa chỉ</th>
                            <th style='font-weight: 400' scope="col">Số điện thoại</th>
                            <th style='font-weight: 400' scope="col">Tổng số tiền</th>
                            <th style='font-weight: 400' scope="col">Trạng thái</th>
                            <th style='font-weight: 400' scope="col">Ngày mua</th>
                            <th style='font-weight: 400' scope="col">Thao tác</th>
                            <th style='font-weight: 400' scope="col">Xem chi tiết</th>
                        </tr>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>

<?php 
    include "admin/template/footer.php";
    $url = "admin.php?path=category";
?>